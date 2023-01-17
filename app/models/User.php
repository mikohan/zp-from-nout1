<?php

class User {

    public $param1;
    public $param2;
    public $d = array();
    public $t = array();
    public $r = array();
    public $a = array();
    public $left = array();

    public $colors = array("#1abc9c", "#2ecc71", "#3498db", "#9b59b6", "#34495e", "#16a085", "#27ae60", "#2980b9", "#8e44ad", "#2c3e50", "#880e4f", "#e67e22", "#e74c3c", "#880e4f", "#95a5a6", "#f39c12", "#d35400", "#c0392b", "#03a9f4", "#ff4444","#CC0000", "#ff4444", "#ffbb33", "#33b5e5", "#00C851", "#0099CC", "#aa66cc", "#0d47a1", "#2BBBAD", "#9933CC", "#00C851","#3F729B", "#37474F", "#d81b60", "#4a148c", "#CC0000", "#ffbb33", "#FF8800", "#007E33", "#0099CC", "#00695c", "#0d47a1", "#9933CC", "#212121", "#3E4551", "#1C2331", "#263238", "#ff4444", "#ffbb33", "#00C851", "#33b5e5", "#2BBBAD", "#4285F4", "#aa66cc", "#2E2E2E", "#4B515D", "#3F729B", "#37474F", "#CC0000", "#ffbb33", "#FF8800", "#007E33", "#0099CC", "#00695c", "#0d47a1", "#9933CC", "#212121", "#3E4551", "#1C2331", "#263238", "#ff4444", "#ffbb33", "#00C851", "#33b5e5", "#2BBBAD", "#4285F4", "#aa66cc", "#2E2E2E", "#4B515D", "#3F729B", "#37474F", "#CC0000", "#ffbb33", "#FF8800", "#007E33", "#0099CC", "#00695c", "#0d47a1", "#9933CC", "#212121", "#3E4551", "#1C2331", "#263238", "#ff4444", "#ffbb33", "#00C851", "#33b5e5", "#2BBBAD", "#4285F4", "#aa66cc", "#2E2E2E", "#4B515D", "#3F729B", "#37474F", "#CC0000", "#ffbb33", "#FF8800", "#007E33", "#0099CC", "#00695c", "#0d47a1", "#9933CC", "#212121", "#3E4551", "#1C2331", "#263238", "#ff4444", "#ffbb33", "#00C851", "#33b5e5", "#2BBBAD", "#4285F4", "#aa66cc", "#2E2E2E", "#4B515D", "#3F729B", "#37474F");



    public function first_query($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT `id`,`name`,`img` FROM `h3` WHERE `id_h2` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> d = $sth -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> d)
            return $this -> d;
        return FALSE;

    }//Конец функции

    public function second_query($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT `name`, `id`, `id_h1` FROM `h2` WHERE `id` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> t)
            return $this -> t;
        return FALSE;

    }//Конец функции

    public function third_query($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT * FROM `h4` WHERE `id_h3` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> d = $sth -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> d)
            return $this -> d;
        return FALSE;

    }//Конец функции

    public function title_query($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT `id`, `name`,`id_h2` FROM `h3` WHERE `id` = ? ';
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> t)
            return $this -> t;
        return false;

    }//Конец функции

    public function title_query2($param1 = '') {

        $m = db();
        $query = 'SELECT `name`,`id_h1` FROM `h2` WHERE `id` = ? ';
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        if ($this -> t)
            return $this -> t;
        return false;

    }//Конец функции

    public function angara_query($param1 = '', $param2 = '') {

        $m = db();
        $query = "SELECT a.*
					FROM `porter_part_info` s
					INNER JOIN angara a
					on s.numer = a.cat
					WHERE s.id_part = $param1
					ORDER BY a.price DESC";
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $count = $sth -> rowCount();
        //var_dump($count);
        $this -> r = $sth -> fetchAll(PDO::FETCH_NUM);
        if ($this -> r)
            return $this -> r;
        return FALSE;
    }//Конец функции


    public function angara_query2($param1 = '', $param2 = '') {
        $r1 = array();
        $m = db();
        $query1 = "SELECT a.*,c.title, c.text, c.meta_d  FROM `angara` a
                    LEFT JOIN  content_news c
                    on a.1c_id = c.author
                    WHERE a.1c_id = '$param1'
                    ORDER BY `price` ";
        //$param1 = $m -> quote($param1);
        foreach ($result1 = $m->query($query1,PDO::FETCH_NUM) as $r1) {
            $r[] = $r1;
        }
        if (!empty($r1)) {
            $r1[1] = explode(' ', trim($r1[1]));
            $n = $r1[1][0];
            $n1 = substr($r1[1][1], 0, 8);
            $query2 = "(SELECT *, MATCH (ang_name)  AGAINST ('+$n $n1* +PORTER' IN BOOLEAN MODE)  AS rel FROM angara ORDER BY rel DESC )  LIMIT 4 ";
            //SELECT *, MATCH field1, field2 AGAINST ('$searchwords') as relev FROM  table ORDER BY relev DESC
            foreach ($result = $m->query($query2,PDO::FETCH_NUM) as $r2) {
                $rtwo[] = $r2;

            }
            //print_r($rtwo);
            if ($result1 -> rowCount() > 0)
                return array($r, $rtwo);
        }

        return FALSE;
    }//Конец функции

    public function angara_query_cat($param1 = '') {
        $m = db();
        $param1 = substr($param1, 0, 6);
        $query = "SELECT * FROM `ang_subcategories`  WHERE `id` = ? ";
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $a = $sth -> fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function angara_query_articles($param1 = '') {
        $m = db();
        $query = "SELECT * FROM `content_articles`  WHERE `text` LIKE  ? ";
        $sth = $m -> prepare($query);
        $sth -> execute(array("%$param1%"));
        $a = $sth -> fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function cheap_query($param1, $param2 = '') {
        $m = db();
        $param1 = substr($param1, 0, 9);
        $query = "SELECT ang_name,price,1c_id FROM `angara`  WHERE `cat` LIKE  ?  AND price < ? ORDER BY price LIMIT 4 ";
        $sth = $m -> prepare($query);
        $sth -> execute(array("%$param1%", "$param2"));
        $a = $sth -> fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function angara_query_cat2($param1 = '') {
        $m = db();
        $query = "SELECT * FROM `ang_categories`  WHERE `id` = ? ";
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $a = $sth -> fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function a_query($param1 = '', $param2 = '') {

        $m = db();
        $query = "select
                    b.id, b.title, b.coords, a.numer ,c.ang_name, c.price, c.1c_id, b.keyd
                    from
                    h5 a
                    left join h4 b
                    on a.id_h4 = b.id
                    left join angara c
                    on left(c.cat,9) = left(a.numer,9)
                    where b.id_h3 = ?
                    order by c.price desc
                    ";
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> a = $sth -> fetchAll(PDO::FETCH_ASSOC);

        return $this -> a;
    }//Конец функции

    public function subcat_query($param1 = '', $param2 = '') {

        $m = db();
        $d = array();
        $query = "SELECT * FROM `ang_subcategories` WHERE `parent` = '$param1' ORDER BY `ang_sort` ";
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> d = $sth -> fetchAll(PDO::FETCH_NUM);

        if (empty($this -> d)) {

        }
        return $this -> d;

    }//Конец функции

    public function subcat_title_query($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT * FROM `ang_categories` WHERE `id` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        $this -> t = $sth -> fetchAll(PDO::FETCH_NUM);
        if ($this -> t)
            return $this -> t;
        return false;

    }//Конец функции

    private function get_subcat_weight($category_id) {
        $m = db();
        $q = 'SELECT * FROM category_weight WHERE category_id = :category_id ORDER BY weight';
        $t = $m -> prepare($q);
        //$t -> execute(array($id, '%' . $car . '%'));
        //echo $car;
        $t -> bindValue(":category_id", $category_id, PDO::PARAM_INT);
        $t -> execute();
        $data = $t -> fetchAll(PDO::FETCH_ASSOC);
        //p($data);
        return $data;
    }

    public function porterparts_query($parent) {
        $m = db();
        $weights = $this -> get_subcat_weight($parent);
        //$parent = 35;
        foreach ($weights as $weight) {
            //p($weight['full_name']);
            $q = 'SELECT * FROM `angara` WHERE `parent` = :parent  AND ang_name LIKE :part_name ORDER BY price';
            $t = $m -> prepare($q);
            $t -> execute(array(':parent' => $parent, ':part_name' => $weight['part_name'] . '%'));
            $data = $t -> fetchAll(PDO::FETCH_ASSOC);
            $big[$weight['full_name'] . '-' . $weight['id']] = $data;
            // p($big);
        }

        $q2 = 'SELECT * FROM `angara` WHERE `parent` = :parent AND  substring_index(ang_name, " ", 1)  NOT IN (SELECT part_name FROM category_weight WHERE category_id = :parent ) ORDER BY price DESC';
        $t = $m -> prepare($q2);

        $t -> execute(array(':parent' => $parent));
        $data = $t -> fetchAll(PDO::FETCH_ASSOC);
        $big['Разное'] = $data;
        //p($data);

        //p($big);
        return $big;
    }

    public function get_cat_name($parent) {
        $m = db();
        $q = 'SELECT ang_subcat FROM `ang_subcategories` WHERE `id` = :parent';
        $t = $m -> prepare($q);
        $t -> execute(array(':parent' => $parent));
        $data = $t -> fetchAll(PDO::FETCH_ASSOC);
        //p($parent);
        return $data[0];
    }

    /*
     *
     * Capilazing fifst letter russian
     *
     */
    public function mb_ucfirst($string, $encoding) {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }

    public function porterparts_query_old($param1 = '', $param2 = '') {

        $m = db();
        $query = 'SELECT a.*, s.ang_subcat, w.*
                FROM angara a
                INNER JOIN ang_subcategories s
                ON a.parent = s.id
                INNER JOIN category_weight w
                ON s.id=w.category_id

                WHERE a.parent = ?

                GROUP BY a.1c_id
                ORDER BY a.ang_sort DESC';

        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array("$param1"));
        if ($this -> d = $sth -> fetchAll(PDO::FETCH_NUM))
            //p_a($this -> d);
            return $this -> d;
        return FALSE;
    }//Конец функции

    /*public function porterparts_query($param1 = '', $param2 = '') {

     $m = db();

     //$query = 'SELECT a.*, s.ang_subcat FROM angara a
     //        INNER JOIN ang_subcategories s
     //       ON a.parent = s.id
     //       WHERE a.parent = ? ORDER BY a.ang_sort DESC ';

     $query = 'SELECT a.*, s.ang_subcat, w.*
     FROM angara a
     INNER JOIN ang_subcategories s
     ON a.parent = s.id
     INNER JOIN category_weight w
     ON s.id=w.category_id

     WHERE a.parent = ?

     GROUP BY a.1c_id
     ORDER BY a.ang_sort DESC';

     //$param1 = $m -> quote($param1);
     $sth = $m -> prepare($query);
     $sth -> execute(array("$param1"));
     if ($this -> d = $sth -> fetchAll(PDO::FETCH_NUM))
     //p_a($this -> d);
     return $this -> d;
     return FALSE;
     }//Конец функции

     *
     */
    public function get_image($id) {
        $f = '';
        $dir = ANG_ROOT . "public/img/others/";
        $pattern = strtolower($dir . '*' . $id . '\.{jpg,png,gif}');
        foreach (glob($pattern, GLOB_BRACE) as $filename) {
            $end = explode('/', $filename);
            $file = (end($end));
            $f = $file;

        }
        return $f;

    }//Конец функции

    public function p_a($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }//Конец функции

    public function reviews($id = '') {

        //echo $id;
        $m = db();
        $query1 = 'SELECT * FROM `ang_reviews_prosduct` WHERE 1c_id = ?  LIMIT 3';
        $sth = $m -> prepare($query1);
        $sth -> execute(array("$id"));
        $this -> t = $sth -> fetchAll(PDO::FETCH_NUM);
        if ($sth -> rowCount() > 0) {
            return $this -> t;
        } else {

            $query = 'SELECT * FROM `ang_reviews` ORDER BY RAND() LIMIT 3';
            //$param1 = $m -> quote($param1);
            $sth = $m -> prepare($query);
            $sth -> execute();
            $t = $this -> t = $sth -> fetchAll(PDO::FETCH_NUM);
            return $this -> t;
        }
    }//

    public function insert_reviews($post = FALSE) {
        $m = db();
        if (isset($post)) {
            $c_id = filter_var($post['1c_id'], FILTER_SANITIZE_NUMBER_INT);
            $name = filter_var($post['name'], FILTER_SANITIZE_SPECIAL_CHARS);
            $text = filter_var($post['text'], FILTER_SANITIZE_SPECIAL_CHARS);
            $text = preg_replace('/[^а-яА-Я0-9\s\.\,\!\?]+/u', '', $text);
            $radio = filter_var($post['inlineRadioOptions'], FILTER_SANITIZE_NUMBER_INT);
            $date = date("m.d.y");
            //echo '<br />' . $c_id . '<br />' . $name . '<br>' . $text . '<br>' . $radio;

            //p_a($post);
            $sql = "INSERT INTO ang_reviews_prosduct
                     (author,
                     review,
                     rating,
                     rew_date,
                     1c_id) VALUES (:author,
                     :review,
                     :rating,
                     :date,
                     :1c_id)";
            $q = $m -> prepare($sql);

            if ($q -> execute(array(':author' => $name, ':review' => $text, ':rating' => $radio, ':date' => $date, ':1c_id' => $c_id))) {

                $row = $q -> rowCount();
                // echo 'INSERTED';

            } else {
                //echo 'Not OK';

            }

        }//if
    }//

    public function get_cat_description($id) {
        $m = db();
        $query = 'SELECT * FROM `content_cat` WHERE cat = ?';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array($id));
        $t = $this -> t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        return $this -> t;
    }

    public function get_subcat_description($id) {
        $m = db();
        $query = 'SELECT * FROM `content_subcat` WHERE cat = ?';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array($id));
        $t = $this -> t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        return $this -> t;
    }

    public function getVids($part_id){
        $m = db();
        $query = 'SELECT * FROM `ang_videos` WHERE part_id = ?';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute(array($part_id));
        $t = $sth -> fetchAll(PDO::FETCH_ASSOC);
        return $t;
    }

}
