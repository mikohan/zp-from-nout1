<?php

function left_bar() {
    $m = db();
    $query = 'SELECT * FROM ang_categories ORDER BY ang_sort';

    //$param1 = $m -> quote($param1);
    $sth = $m -> prepare($query);
    $sth -> execute();
    $left = $sth -> fetchAll(PDO::FETCH_ASSOC);
    // print_r($this -> left);
    return $left;
}

function left_bar_sub() {
    $m = db();
    $query = 'SELECT * FROM ang_subcategories';

    //$param1 = $m -> quote($param1);
    $sth = $m -> prepare($query);
    $sth -> execute();
    $left1 = $sth -> fetchAll(PDO::FETCH_ASSOC);
    //print_r($left1);
    return $left1;
}

/**
 * Print array
 */
function p($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}//Конец функции

function db() {

    try {
        $dsn = 'mysql:dbname=' . ANG_DBNAME . ';host=' . ANG_HOST;
        $pdo = new PDO($dsn, ANG_DBUSER, ANG_DBPASS);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo -> exec("set names utf8");

    } catch(PDOException $e) {
        echo $e -> getMessage();
    }
    return $pdo;
}

/*
 * Sphinx connection
 */
function db_sphinx() {

    try {
        $dsn = 'mysql:dbname=' . ANG_DBNAME . ';host=' . ANG_HOST;
        $pdo = new PDO(SPHINX_CONN, "", "");
        //$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$pdo -> exec("set names utf8");

    } catch(PDOException $e) {
        echo $e -> getMessage();
    }
    return $pdo;
}//End of function


function filetime_callback($a, $b)
{
  if (filemtime($a) === filemtime($b)) return 0;
  return filemtime($a) > filemtime($b) ? -1 : 1;
}

function get_image($id) {
    $f = '';
    $dir = ANG_ROOT . "public/img/parts/";
    $pattern = $dir . '*-' . $id . '\.{jpg,png,gif}';
    //foreach (glob($pattern, GLOB_BRACE) as $filename) {
    //    $end = explode('/', $filename);
    //    $file[] = (end($end));
    //}

    $file2 = glob($pattern,GLOB_BRACE);
    if(!$file2){
        $pattern = $dir . '*-0' . $id . '\.{jpg,png,gif}';
        $file2 = glob($pattern,GLOB_BRACE);
    }elseif(!$file2){
        $pattern = $dir . '*-00' . $id . '\.{jpg,png,gif}';
        $file2 = glob($pattern,GLOB_BRACE);
    }

    usort($file2, "filetime_callback");
    foreach($file2 as $ft){
        $tmp_file = (explode('/', $ft));
        $tmp_file = end($tmp_file);

        $file3[] = array('time' =>filemtime($ft), 'file'=>$tmp_file);
    }

    if (isset($file3)) {
        return $file3[0]['file'];
    }
    else {
        $file = 'default.png';
        return $file;
    }

}//Конец функции

function title($title) {
    if ($title) {
        echo $title;
    } else {
        echo 'Запчасти ';
    }

}//Конец функции

function to_low($title) {

    mb_convert_case($title, MB_CASE_LOWER, "UTF-8");
    return $title;
}

function ErrorPage404() {
    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    header('Location:' . $host . '404/');
}

function switcher($text, $arrow = 0) {
    $str[0] = array('й' => 'q', 'ц' => 'w', 'у' => 'e', 'к' => 'r', 'е' => 't', 'н' => 'y', 'г' => 'u', 'ш' => 'i', 'щ' => 'o', 'з' => 'p', 'х' => '[', 'ъ' => ']', 'ф' => 'a', 'ы' => 's', 'в' => 'd', 'а' => 'f', 'п' => 'g', 'р' => 'h', 'о' => 'j', 'л' => 'k', 'д' => 'l', 'ж' => ';', 'э' => '\'', 'я' => 'z', 'ч' => 'x', 'с' => 'c', 'м' => 'v', 'и' => 'b', 'т' => 'n', 'ь' => 'm', 'б' => ',', 'ю' => '.', 'Й' => 'Q', 'Ц' => 'W', 'У' => 'E', 'К' => 'R', 'Е' => 'T', 'Н' => 'Y', 'Г' => 'U', 'Ш' => 'I', 'Щ' => 'O', 'З' => 'P', 'Х' => '[', 'Ъ' => ']', 'Ф' => 'A', 'Ы' => 'S', 'В' => 'D', 'А' => 'F', 'П' => 'G', 'Р' => 'H', 'О' => 'J', 'Л' => 'K', 'Д' => 'L', 'Ж' => ';', 'Э' => '\'', '?' => 'Z', 'ч' => 'X', 'С' => 'C', 'М' => 'V', 'И' => 'B', 'Т' => 'N', 'Ь' => 'M', 'Б' => ',', 'Ю' => '.', );
    $str[1] = array('q' => 'й', 'w' => 'ц', 'e' => 'у', 'r' => 'к', 't' => 'е', 'y' => 'н', 'u' => 'г', 'i' => 'ш', 'o' => 'щ', 'p' => 'з', '[' => 'х', ']' => 'ъ', 'a' => 'ф', 's' => 'ы', 'd' => 'в', 'f' => 'а', 'g' => 'п', 'h' => 'р', 'j' => 'о', 'k' => 'л', 'l' => 'д', ';' => 'ж', '\'' => 'э', 'z' => 'я', 'x' => 'ч', 'c' => 'с', 'v' => 'м', 'b' => 'и', 'n' => 'т', 'm' => 'ь', ',' => 'б', '.' => 'ю', 'Q' => 'Й', 'W' => 'Ц', 'E' => 'У', 'R' => 'К', 'T' => 'Е', 'Y' => 'Н', 'U' => 'Г', 'I' => 'Ш', 'O' => 'Щ', 'P' => 'З', '[' => 'Х', ']' => 'Ъ', 'A' => 'Ф', 'S' => 'Ы', 'D' => 'В', 'F' => 'А', 'G' => 'П', 'H' => 'Р', 'J' => 'О', 'K' => 'Л', 'L' => 'Д', ';' => 'Ж', '\'' => 'Э', 'Z' => '?', 'X' => 'ч', 'C' => 'С', 'V' => 'М', 'B' => 'И', 'N' => 'Т', 'M' => 'Ь', ',' => 'Б', '.' => 'Ю', );
    return strtr($text, isset($str[$arrow]) ? $str[$arrow] : array_merge($str[0], $str[1]));
}//End of function

function cutoff($text, $length) {
    if (strlen($text) > $length) {
        $text = strip_tags($text);
        $text = substr($text, 0, strpos($text, ' ', $length));
    }

    return $text . '...';
}

function cutter($string = '') {
    $pattern = '/(\s\d.+)|(\s\/.+)/ui';
    $replacement = '';
    $string = mb_strtolower($string, 'utf-8');
    $str = preg_replace($pattern, $replacement, $string);
    return mb_ucfirst($str) . ' Портер';
}

function cutter_two($string) {
    //$pattern = '/^(\w+\s\w+)|^(\w+\s\(.+\))/ui';
    $pattern = "/^(\w+\s\w+)|^(\w+\s\(.+\))|^(\w+\s.+)/ui";
    $replacement = '';
    //$string = mb_strtolower(trim($string), 'utf-8');
    $string = trim($string);

    preg_match($pattern, $string, $match);
    $str = $match[0];

    return mb_ucfirst($str);
}

if (!function_exists('mb_ucfirst')) {
    function mb_ucfirst($str, $enc = 'utf-8') {
        return mb_strtoupper(mb_substr($str, 0, 1, $enc), $enc) . mb_substr($str, 1, mb_strlen($str, $enc), $enc);
    }

}
// Function tranclit url

function rus2translit($string) {

    $converter = array(

        'а' => 'a',   'б' => 'b',   'в' => 'v',

        'г' => 'g',   'д' => 'd',   'е' => 'e',

        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',

        'и' => 'i',   'й' => 'y',   'к' => 'k',

        'л' => 'l',   'м' => 'm',   'н' => 'n',

        'о' => 'o',   'п' => 'p',   'р' => 'r',

        'с' => 's',   'т' => 't',   'у' => 'u',

        'ф' => 'f',   'х' => 'h',   'ц' => 'c',

        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',

        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',

        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',



        'А' => 'A',   'Б' => 'B',   'В' => 'V',

        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',

        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',

        'И' => 'I',   'Й' => 'Y',   'К' => 'K',

        'Л' => 'L',   'М' => 'M',   'Н' => 'N',

        'О' => 'O',   'П' => 'P',   'Р' => 'R',

        'С' => 'S',   'Т' => 'T',   'У' => 'U',

        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',

        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',

        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',

        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',

    );

    return strtr(str_ireplace('PORTER', '', $string), $converter);

}

function str2url($str) {

    // переводим в транслит

    $str = rus2translit($str);

    // в нижний регистр

    $str = strtolower($str);

    // заменям все ненужное нам на "-"

    $str = preg_replace('/[^-a-z0-9_]+/u', '-', $str);
    // удаляем начальные и конечные '-'

    $str = trim($str, "-");

    return $str;
}

//$str = 'Все будет хорошо!';
//echo (str2url($str));

function cut_name($name) {

    $str = str_ireplace('PORTER', '', $name);
    $str = str_ireplace('ПОРТЕР', '', $str);
    return $str;
}

function red_text($str) {
        preg_match('/(\s\d+\s)/u', $str, $matches);
        $pattern = '/(\s\d+\s)/u';
        $replacement = '<span class="spec-price">$1</span>';
        $str = preg_replace($pattern, $replacement, $str);
        return $str;
     }

function letter_change($str, $letter, $replace){
    $str = str_replace($letter, $replace, $str);
    echo $str;
}

function good_name($str) {
    $pattern = '#^[^\(\dA-z\/]*#ui';
    preg_match($pattern, $str, $match);
    $string = preg_replace('#\/#ui', ' ', $str);
    preg_match_all('#hd\d+|портер\d|портер#uim', $string, $car);

    if(isset($car[0])){
      if (empty($car[0])) {

      }else{
        foreach($car[0] as $line){
            @$li .= $line . ' ';
        }
      }
    }
    //p($string);
    if (isset($li)) {
      $name = $match[0] . ' на Хендай ' . $li;
    }else{
      $name=$string;
    }

    //echo $name;
    return $name;
}
function get_catalog_page_p1($article){
  $m = db();
  $q = "SELECT DISTINCT a.id_h3 as id,c.name
  FROM h4 a
  JOIN h5 b ON b.id_h4=a.id
  JOIN h3 c ON a.id_h3=c.id
  WHERE b.numer='" . $article ."' ";
    $t = $m -> prepare($q);
    $t -> execute();
    $data = $t -> fetchAll(PDO::FETCH_ASSOC);
    if (isset($data[0]['id']) AND !empty($data[0]['id'])) {
    $array='';
    foreach ($data as $key => $value) {
        $array .=$value['name'] . '`,`';
    }
    $array=explode("`,`",rtrim($array,'`,`'));
    $array_uni=array_unique($array);
    $restr='';
    foreach ($array_uni as $key => $uni) {
      // p($uni);
      $ar_id='';
      foreach ($data as $key => $value) {
        // p($value);
          if ($uni==$value['name']) {
            $ar_id .=$value['id'] . ',';
            // p($value);
          }
      }
      $id=max(explode(',',$ar_id));

      $name_cat=$uni;

      $restr .=$id . '`,`' . $name_cat . '`;`';

    }
    // p($restr);
    $res=explode('`;`',$restr);
    $data=$res;
  }else{
    $data='';
  }

    return $data;
}

function get_catalog_page_p2($article){
    $m = db();
    $prefix="p2_";
    $q = "SELECT DISTINCT a.id_h3 as id,c.name
    FROM " . $prefix . "h4 a
    JOIN " . $prefix . "h5 b ON b.id_h4=a.id
    JOIN " . $prefix . "h3 c ON a.id_h3=c.id
    WHERE b.numer='" . $article ."' ";
      $t = $m -> prepare($q);
      $t -> execute();
      $data = $t -> fetchAll(PDO::FETCH_ASSOC);
      if (isset($data[0]['id']) AND !empty($data[0]['id'])) {

      $array='';
      foreach ($data as $key => $value) {
        // p($value);
          $array .=$value['name'] . '`,`';
      }
      $array=explode("`,`",rtrim($array,'`,`'));
      $array_uni=array_unique($array);
      $restr='';
      foreach ($array_uni as $key => $uni) {
        // p($uni);
        $ar_id='';
        foreach ($data as $key => $value) {
          // p($value);
            if ($uni==$value['name']) {
              $ar_id .=$value['id'] . ',';
              // p($value);
            }
        }
        $id=max(explode(',',$ar_id));

        $name_cat=$uni;

        $restr .=$id . '`,`' . $name_cat . '`;`';

      }
      // p($restr);
      $res=explode('`;`',$restr);
      $data=$res;
    }else{
      $data='';
    }

      return $data;
}
function get_catalog_page($article){
	$m = db();
  $q1=get_catalog_page_p1($article);
  // p($q1);
  $q2=get_catalog_page_p2($article);
  $ar_h3='';
  foreach ($q1 as $key => $value1) {
    $ar_h3 .=$value1['id'] . ',';
  }
  foreach ($q2 as $key => $value2) {
    $ar_id_h3 .=$value2['id'] . ',';
  }
  $res=explode(',',rtrim($ar_id_h3,','));
    $data = $res;
    return $data;
}
