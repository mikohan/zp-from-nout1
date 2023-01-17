<?php

class User2
{

    public $param1;
    public $param2;
    public $d = array();
    public $t = array();
    public $r = array();
    public $a = array();
    public $left = array();

    public function first_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = 'SELECT `id`,`name`,`img` FROM `p2_h3` WHERE `id_h2` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->d = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($this->d)
            return $this->d;
        return FALSE;

    } //Конец функции

    public function second_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = 'SELECT `name`, `id`, `id_h1` FROM `p2_h2` WHERE `id` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->t = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($this->t)
            return $this->t;
        return FALSE;

    } //Конец функции

    public function third_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = 'SELECT * FROM `p2_h4` WHERE `id_h3` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->d = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($this->d)
            return $this->d;
        return FALSE;

    } //Конец функции

    public function title_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = 'SELECT `id`, `name`,`id_h2` FROM `p2_h3` WHERE `id` = ? ';
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->t = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($this->t)
            return $this->t;
        return false;

    } //Конец функции

    public function title_query2($param1 = '')
    {

        $m = db();
        $query = 'SELECT `name`,`id_h1` FROM `p2_h2` WHERE `id` = ? ';
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->t = $sth->fetchAll(PDO::FETCH_ASSOC);
        if ($this->t)
            return $this->t;
        return false;

    } //Конец функции

    public function angara_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = "SELECT a.*
                    FROM `porter_part_info` s
                    INNER JOIN angara a
                    on s.numer = a.cat
                    WHERE s.id_part = $param1
                    ORDER BY a.price DESC";
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $count = $sth->rowCount();
        //var_dump($count);
        $this->r = $sth->fetchAll(PDO::FETCH_NUM);
        if ($this->r)
            return $this->r;
        return FALSE;
    } //Конец функции

    public function angara_query2($param1 = '', $param2 = '')
    {
        $r1 = array();
        $m = db();
        $query1 = "SELECT a.*,c.title, c.text, c.meta_d  FROM `angara` a
                    LEFT JOIN  content_news c
                    on a.1c_id = c.author
                    WHERE a.1c_id = '$param1'
                    ORDER BY `price` ";
        //$param1 = $m -> quote($param1);
        foreach ($result1 = $m->query($query1, PDO::FETCH_NUM) as $r1) {
            $r[] = $r1;
        }
        if (!empty($r1)) {
            $r1[1] = explode(' ', trim($r1[1]));
            $n = $r1[1][0];
            $n1 = substr($r1[1][1], 0, 8);
            $query2 = "(SELECT *, MATCH (ang_name)  AGAINST ('+$n $n1* +PORTER' IN BOOLEAN MODE)  AS rel FROM angara ORDER BY rel DESC )  LIMIT 4 ";
            //SELECT *, MATCH field1, field2 AGAINST ('$searchwords') as relev FROM  table ORDER BY relev DESC
            foreach ($result = $m->query($query2, PDO::FETCH_NUM) as $r2) {
                $rtwo[] = $r2;

            }
            //print_r($rtwo);
            if ($result1->rowCount() > 0)
                return array($r, $rtwo);
        }

        return FALSE;
    } //Конец функции

    public function angara_query_cat($param1 = '')
    {
        $m = db();
        $param1 = substr($param1, 0, 6);
        $query = "SELECT * FROM `ang_subcategories`  WHERE `id` = ? ";
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $a = $sth->fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function angara_query_articles($param1 = '')
    {
        $m = db();
        $query = "SELECT * FROM `content_articles`  WHERE `text` LIKE  ? ";
        $sth = $m->prepare($query);
        $sth->execute(array("%$param1%"));
        $a = $sth->fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function cheap_query($param1, $param2 = '')
    {
        $m = db();
        $param1 = substr($param1, 0, 9);
        $query = "SELECT ang_name,price,1c_id FROM `angara`  WHERE `cat` LIKE  ?  AND price < ? ORDER BY price LIMIT 4 ";
        $sth = $m->prepare($query);
        $sth->execute(array("%$param1%", "$param2"));
        $a = $sth->fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function angara_query_cat2($param1 = '')
    {
        $m = db();
        $query = "SELECT * FROM `ang_categories`  WHERE `id` = ? ";
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $a = $sth->fetchAll(PDO::FETCH_NUM);

        return $a;
    }

    public function a_query($param1 = '', $param2 = '')
    {

        //p ($param2);
        if ($param2 == "p2_") {
            $prefix = "p2_";

        } else {
            $prefix = "";
        }
        $m = db();
        $query = "select
                    b.id, b.title, b.coords, a.numer ,c.ang_name, c.price, c.1c_id, b.keyd ,c.cat
                    from
                    " . $prefix . "h5 a
                    left join " . $prefix . "h4 b
                    on a.id_h4 = b.id
                    left join angara c
                    on left(c.cat,9) = left(a.numer,9)
                    where b.id_h3 = ?

                    ";
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->a = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $this->a;
    } //Конец функции

    public function subcat_query($param1 = '', $param2 = '')
    {

        $m = db();
        $d = array();
        $query = "SELECT * FROM `ang_subcategories` WHERE `parent` = '$param1' ORDER BY `ang_sort` ";
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->d = $sth->fetchAll(PDO::FETCH_NUM);

        if (empty($this->d)) {

        }
        return $this->d;

    } //Конец функции

    public function subcat_title_query($param1 = '', $param2 = '')
    {

        $m = db();
        $query = 'SELECT * FROM `ang_categories` WHERE `id` = ? ';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        $this->t = $sth->fetchAll(PDO::FETCH_NUM);
        if ($this->t)
            return $this->t;
        return false;

    } //Конец функции

    public function porterparts_query($param1 = '', $param2 = '')
    {

        $m = db();

        $query = 'SELECT a.*, s.ang_subcat FROM angara a
                INNER JOIN ang_subcategories s
                ON a.parent = s.id
                WHERE a.parent = ? ORDER BY a.ang_sort DESC ';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array("$param1"));
        if ($this->d = $sth->fetchAll(PDO::FETCH_NUM))
            //p_a($this -> d);
            return $this->d;
        return FALSE;
    } //Конец функции

    public function get_image($id)
    {
        $f = '';
        $dir = ANG_ROOT . "public/img/others/";
        $pattern = strtolower($dir . '*' . $id . '\.{jpg,png,gif}');
        foreach (glob($pattern, GLOB_BRACE) as $filename) {
            $end = explode('/', $filename);
            $file = (end($end));
            $f = $file;

        }
        return $f;

    } //Конец функции

    public function p_a($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    } //Конец функции

    public function reviews($id = '')
    {

        //echo $id;
        $m = db();
        $query1 = 'SELECT * FROM `ang_reviews_prosduct` WHERE 1c_id = ?  LIMIT 3';
        $sth = $m->prepare($query1);
        $sth->execute(array("$id"));
        $this->t = $sth->fetchAll(PDO::FETCH_NUM);
        if ($sth->rowCount() > 0) {
            return $this->t;
        } else {

            $query = 'SELECT * FROM `ang_reviews` ORDER BY RAND() LIMIT 3';
            //$param1 = $m -> quote($param1);
            $sth = $m->prepare($query);
            $sth->execute();
            $t = $this->t = $sth->fetchAll(PDO::FETCH_NUM);
            return $this->t;
        }
    } //

    public function insert_reviews($post = FALSE)
    {
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
            $q = $m->prepare($sql);

            if ($q->execute(array(':author' => $name, ':review' => $text, ':rating' => $radio, ':date' => $date, ':1c_id' => $c_id))) {

                $row = $q->rowCount();
                // echo 'INSERTED';

            } else {
                //echo 'Not OK';

            }

        } //if
    } //

    public function get_cat_description($id)
    {
        $m = db();
        $query = 'SELECT * FROM `content_cat` WHERE cat = ?';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array($id));
        $t = $this->t = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $this->t;
    }

    public function get_subcat_description($id)
    {
        $m = db();
        $query = 'SELECT * FROM `content_subcat` WHERE cat = ?';
        //$param1 = $m -> quote($param1);
        $sth = $m->prepare($query);
        $sth->execute(array($id));
        $t = $this->t = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $this->t;
    }


}