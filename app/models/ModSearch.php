<?php

class ModSearch {

    public $param1;
    public $param2;
    public $d = array();

    public function search_query($param1 = '', $param2 = '') {
        //$param1 = mb_strtolower(trim($param1));
        $param1 = $this -> switcher($param1);
        $search = array();
        $search = explode(' ', $param1);
        
        $search[0] = substr($search[0], 0, 8);
        if(isset($search[1])) {
            $search[1] = substr($search[1], 0, 8);
        }
        //p($search);
        if (!array_key_exists(1, $search)) {
            $search[1] = '';
        }
        if (!array_key_exists(2, $search)) {
            $search[2] = '';
        }
        $m = db();
        //SELECT *, MATCH(translation) AGAINST ('+word' IN BOOLEAN MODE) AS relevance FROM `vocabulary` WHERE MATCH(translation) AGAINST ('+word' IN BOOLEAN MODE) ORDER BY relevance DESC
        //$query = "(SELECT *, MATCH (ang_name)  AGAINST ( :search IN BOOLEAN MODE)   AS rel FROM angara WHERE MATCH (ang_name) AGAINST ( :search IN BOOLEAN MODE)  ORDER BY rel DESC  )  LIMIT 28 ";
        //$query = "(SELECT * FROM `angara` WHERE MATCH (ang_name,description) AGAINST (:search IN BOOLEAN MODE) ) LIMIT 24   ";
        $query = 'SELECT * FROM `angara` WHERE `ang_name` LIKE :search1 AND `ang_name` LIKE :search2 ORDER BY ang_sort DESC LIMIT 32';
        //$value = "+$search[0]* $search[1]* $search[2]*";
        $sth = $m -> prepare($query);
        $sth -> bindValue(':search1', "%$search[0]%", PDO::PARAM_STR);
        $sth -> bindValue(':search2', "%$search[1]%", PDO::PARAM_STR);
        //$sth -> bindValue(':search', $value, PDO::PARAM_STR);
        $sth -> execute();
        $d = $sth -> fetchAll(PDO::FETCH_NUM);
        if (!$d)
            return false;
        return $d;

    }//Конец функции

    /*
     * Sphnx search
     */
    public function sphinx_q($param1 = '') {
        $param1 = strtolower(trim($param1));
        $param1 = $this -> switcher($param1);
        $sph = db_sphinx();
        $query = "SELECT * FROM  ang_porter  WHERE MATCH(?) LIMIT 28 ";
        //$param1 = $m -> quote($param1);
        $sth = $sph -> prepare($query);
        $sth -> execute(array("$param1"));
        if ($sphinx_result = $sth -> fetchAll(PDO::FETCH_NUM)) {
            $m = db();
            $idlist = array();
            foreach ($sphinx_result as $id => $idinfo) {
                // p($idinfo);
                $idlist[] = "$id";
                $real_id[] = $idinfo[0];
            }
            $ids = implode(", ", $idlist);
            $idss = implode(", ", $real_id);
            $query5 = "SELECT * FROM angara WHERE id IN ($idss) ORDER BY FIELD(id, $idss)";

            $sth = $m -> prepare($query5);

            $sth -> execute();
            if ($d = $sth -> fetchAll(PDO::FETCH_NUM)) {
                return $d;
            } else {
                return FALSE;
            }
        } else
            return FALSE;
    }//Конец функции

    private function switcher($string) {
        /*Кол-во попадений не правильных слов в строке чтобы считать что строка написана в не правильной раскладке*/
        $countErrorWords = 1;
        /*счетчик не правильных слов*/
        $countError = 0;
        /*При попадении таких слов, считать что выбрана не правильная раскладка клавиатуры*/

        include_once (ANG_ROOT . 'app/lib/array.php'); ;
        //p_a($errorWords);
        /*Символы которые нужно исключить из строки*/
        $delChar = array('!' => '', '&' => '', '?' => '', '/' => '');
        /*Исключения*/
        $expectWord = array('.ьу' => '/me');
        /*Символы для замены на русские*/
        $arrReplace = array('q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 't' => 'е', 'y' => 'н', 'u' => 'г', 'i' => 'ш', 'o' => 'щ', 'p' => 'з', '[' => 'х', ']' => 'ъ', 'a' => 'ф', 's' => 'ы', 'd' => 'в', 'f' => 'а', 'g' => 'п', 'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д', ';' => 'ж', "'" => 'э', 'z' => 'я', 'x' => 'ч', 'c' => 'с', 'v' => 'м', 'b' => 'и', 'n' => 'т', 'm' => 'ь', ',' => 'б', '.' => 'ю', '/' => '.', '`' => 'ё', 'Q' => 'Й', 'W' => 'Ц', 'E' => 'У', 'R' => 'К', 'T' => 'Е', 'Y' => 'Н', 'U' => 'Г', 'I' => 'Ш', 'O' => 'Щ', 'P' => 'З', '{' => 'Х', '}' => 'Ъ', 'A' => 'Ф', 'S' => 'Ы', 'D' => 'В', 'F' => 'А', 'G' => 'П', 'H' => 'Р', 'J' => 'О', 'K' => 'Л', 'L' => 'Д', ':' => 'Ж', '"' => 'Э', '|' => '/', 'Z' => 'Я', 'X' => 'Ч', 'C' => 'С', 'V' => 'М', 'B' => 'И', 'N' => 'Т', 'M' => 'Ь', '<' => 'Б', '>' => 'Ю', '?' => ',', '~' => 'Ё', '@' => '"', '#' => '№', '$' => ';', '^' => ':', '&' => '?');
        /*Меняем ключ со значением в массиве $arrReplace*/
        $arrReplace2 = array_flip($arrReplace);
        /*Удаляем некоторые символы*/
        unset($arrReplace2['.']);
        unset($arrReplace2[',']);
        unset($arrReplace2[';']);
        unset($arrReplace2['"']);
        unset($arrReplace2['?']);
        unset($arrReplace2['/']);
        /*И соединяем массивы в один*/
        $arrReplace = array_merge($arrReplace, $arrReplace2);
        /*Переводим в нижний регистр, удаляем пробелы с начала и конца, разбиваем предложение на слова*/
        $string2 = strtr(trim(strtolower($string)), $delChar);
        $arrString = explode(" ", $string2);
        /*Проверям есть ли неправильно написаные слова и считаем их кол-во*/
        foreach ($arrString as $val) {
            if (array_search($val, $errorWords)) {
                $countError++;
            }
        }
        return ($countError >= $countErrorWords) ? strtr(strtr($string, $arrReplace), $expectWord) : $string;
    }

}
