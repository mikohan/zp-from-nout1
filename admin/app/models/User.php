<?php

class User extends Core {

    public $param1;
    public $param2;
    public $d = array();

    public function parse_tot($url) {

        $result = $this -> get_web_page($url);
        $html = new simple_html_dom();
        $html -> load($result);

        foreach ($html->find('div.category-list a') as $fk => $element) {
            $url2 = $element -> href . '?limit=50';
            //echo($url2) . '<br />';
            $result2 = $this -> get_web_page($url2);
            $html2 = new simple_html_dom();
            $html2 -> load($result2);

            foreach ($html2->find('tbody tr') as $ul) {

                $td = $ul -> find('td', 0);
                $td1 = $ul -> find('td', 1);
                $td2 = $ul -> find('td', 3);

                $a[] = array($td -> plaintext, $td1 -> plaintext, $td2 -> plaintext);

            }

            foreach ($html2->find('div.pagination a') as $pag) {
                // echo $pag -> href . '<br />';
                foreach ($html2->find('tbody tr') as $ul) {

                    $td = $ul -> find('td', 0);
                    $td1 = $ul -> find('td', 1);
                    $td2 = $ul -> find('td', 3);

                    $a[] = array($td -> plaintext, $td1 -> plaintext, $td2 -> plaintext);

                }
            }

        }
        //$this -> p($a);
        //return $a;
        $this -> insert_tot($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);
        $html2 -> clear();
        unset($html2);

    }

    private function insert_tot($a) {

        //$this -> truncate('parse_totaldisel');
        foreach ($a as $x) {
            // p($x);

            if ($x[0] == null) {
                $x[0] = 0;
            }
            if ($x[1] == null) {
                $x[1] = 0;
            }
            if ($x[2] == null) {
                $x[2] = 0;
            }

            $x[0] = str_replace('-', '', $x[0]);
            $x[1] = trim($x[1]);
            $x[2] = str_replace('руб', '', trim($x[2]));

            if ($this -> insert_tot2($x[0], $x[1], $x[2])) {

                echo 'GOOD!<br />';
            } else {
                echo 'FUCK!';

            }
        }

    }//insert_tot

    /*
     * Вставляем  в mysql
     */
    private function insert_tot2($p1, $p2, $p3) {

        $conn = $this -> db();

        $sql = "INSERT INTO parse_totaldisel (cat,name,price) VALUES (:cat,:name,:price)";
        $q = $conn -> prepare($sql);
        if ($q -> execute(array(':cat' => $p1, ':name' => $p2, ':price' => $p3))) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    /*
     * Parsing jelezyaka
     */

    public function parse_zel($q, $url) {
        for ($i = 1; $i < $q; ++$i) {
            $urli = str_replace('{@}', "$i", $url);

            $result = $this -> get_web_page($urli);
            $html = new simple_html_dom();
            $html -> load($result);
            foreach ($html->find('tbody tr') as $ul) {

                $td = $ul -> find('td', 2) -> plaintext;
                $td1 = $ul -> find('td', 3) -> plaintext;
                $td2 = $ul -> find('td', 4) -> plaintext;
                echo $ul -> href . '<br />';
                $a[] = array(trim($td), iconv('CP1251', 'UTF-8', $td1), $td2);

            }

        }
        //p($a);
        //return $a;
        $this -> insert_zel($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);

    }

    private function insert_zel($a) {

        //$this -> truncate('parse_zel');
        foreach ($a as $x) {
            $this -> p($x);

            if ($x[0] == null) {
                $x[0] = 0;
            }
            if ($x[1] == null) {
                $x[1] = 0;
            }
            if ($x[2] == null) {
                $x[2] = 0;
            }

            $x[1] = trim($x[1]);
            $x[1] = str_replace('-', '', $x[1]);

            $x[2] = preg_replace('/[^0-9\.]+/ui', '', $x[2]);

            if ($this -> insert_zel2($x[1], $x[0], $x[2])) {

                echo 'GOOD!<br />';
            } else {
                echo 'FUCK!';

            }
        }

    }//insert_tot

    private function insert_zel2($p1, $p2, $p3) {

        $conn = $this -> db();

        $sql = "INSERT INTO parse_zel (cat,name,price) VALUES (:cat,:name,:price)";
        $q = $conn -> prepare($sql);
        if ($q -> execute(array(':cat' => $p1, ':name' => $p2, ':price' => $p3))) {
            return TRUE;
        } else {
            return FALSE;
        }

    }//insert_zel2

    public function get_data($v = '') {
        if ($v != '') {
            $m = $this -> db();
            $query = "select  a.ang_name,a.price,b.price, c.price, b.name,c.name ,  a.cat
                    from
                    angara_all a
                    inner join parse_totaldisel b
                    on a.cat = b.cat
                    inner join parse_zel c
                    on a.cat = c.cat
                    where a.ang_name like '%$v%'
                    group by a.ang_name
                    order by a.ang_name
                    
                   ";
            $sth = $m -> prepare($query);
            $sth -> execute();
            $t = $sth -> fetchAll(PDO::FETCH_NUM);
            if ($t)
                return $t;
            return false;

        } else {
            $m = $this -> db();
            $query = "select a.ang_name,a.price,b.price, c.price, b.name,c.name, a.cat
                    from
                    angara_all a
                    inner join parse_totaldisel b
                    on b.cat = a.cat
                    inner join parse_zel c
                    on c.cat = a.cat
                    group by a.ang_name,a.price,b.price, c.price, b.name,c.name, a.cat
                    order by a.ang_name
                    
                   
                   ";
            $sth = $m -> prepare($query);
            $sth -> execute();
            $t = $sth -> fetchAll(PDO::FETCH_NUM);
            if ($t)
                return $t;
            return false;
        }

    }

    function modgetmit($v = '') {

        if ($v != '') {
            $query = "select a.ang_name,a.price,b.mit_price, b.name,b.cat 
                    from
                    angara a
                    inner join parse_mitino b
                    on a.cat = b.cat
                    where a.ang_name like '%$v%' and  a.ang_name like '%porter%'
                    group by a.ang_name,a.price,b.mit_price, b.name,b.cat
                    order by a.ang_name
                   
                   ";
        } else {
            $query = "select a.ang_name,a.price,b.mit_price, b.name,b.cat 
                    from
                    angara a
                    inner join parse_mitino b
                    on a.cat = b.cat
                    where a.ang_name like '%porter%'
                    group by a.ang_name,a.price,b.mit_price, b.name,b.cat
                     order by a.ang_name
                   
                   ";
        }

        $m = $this -> db();
        $m1 = $this -> db();

        $sth = $m -> prepare($query);
        $sth -> execute();
        $t = $sth -> fetchAll(PDO::FETCH_NUM);

        //$d = $sth->getColumnMeta(0);
        if ($t) {
            return $t;
        } else {
            return false;
        }

    }//Конец функции

    public function mod_parse_mit($url) {
        $result = $this -> get_web_page($url);
        $html = new simple_html_dom();
        $html -> load($result);

        foreach ($html->find('div#leftmenu a') as $fk => $element) {
            $url2 = $url . $element -> href;
            // echo ($url2) . '<br />';
            $result2 = $this -> get_web_page($url2);
            $html2 = new simple_html_dom();
            $html2 -> load($result2);

            foreach ($html2->find('table#prod_list tr') as $k => $ul) {

                foreach ($ul->find('td') as $key => $li) {

                    $a[$fk][$k][$key] = $li -> plaintext;

                }
            }

        }
        //p($a);
        //return $a;
        $this -> insert_mit($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);
        $html2 -> clear();
        unset($html2);
    }

    private function insert_mit($a) {

        foreach ($a as $x) {
            foreach ($x as $z) {

                $z[1] = str_replace('-', '', $z[1]);
                $z[1] = str_replace('NG', '', $z[1]);
                if ($qu = $this -> insert_mit2($z[1], $z[2], $z[3])) {
                    echo 'GOOD!<br />';

                } else {
                    echo 'FUCK!';
                }
                //p($z);
            }
        }

    }// insert-mit

    private function insert_mit2($p1, $p2, $p3) {
        $conn = $this -> db();

        $sql = "INSERT INTO parse_mitino (cat,name,mit_price) VALUES (:cat,:name,:price)";
        $q = $conn -> prepare($sql);
        if ($q -> execute(array(':cat' => $p1, ':name' => $p2, ':price' => $p3))) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function parse_spec($url,$table) {

        $result = $this -> get_web_page($url);
        $html = new simple_html_dom();
        $html -> load($result);
        $i = 1;
        foreach ($html->find('a[style=color:#9ba0a7;]') as $fk => $element) {
            $url2 = $element -> href;
            $url2 = 'http://speckomzapchast.ru' . $url2;
            //echo($url2) . '<br />';
            //$i++;
            //if ($i == 2) {
            //    break;
            //}
            $result2 = $this -> get_web_page($url2);
            $html2 = new simple_html_dom();
            $html2 -> load($result2);

            foreach ($html2->find('div.vm-product-media-container a[title]') as $s) {
                $url3 = 'http://speckomzapchast.ru' . $s -> href;
                //echo($url3) . '<br />';
                $result3 = $this -> get_web_page($url3);
                $html3 = new simple_html_dom();
                $html3 -> load($result3);

                foreach ($html3->find('div.productdetails-view') as $last) {
                    $n = $last -> find('h1', 0) -> plaintext;
                    @$p = $last -> find('span.PricesalesPrice', 0) -> plaintext;
                    //$art = $last -> find('div.vm-product-descr-container-0', 0) -> plaintext;
                    echo $art . '<br>';
                    
                    preg_match('/\b[A-Z0-9]{5,}\b/u', $n, $matches);
                    $catnum = $matches[0];

                    //echo $n . ' - ' . $p . '<br>';
                    //$a[] = array($n, $p, $catnum);
                    
                    $this->insert_spec($table, $catnum, $n, $p);
                }

            }
        }
        //$this -> p($a);
        //return $a;
        //$this -> insert_tot($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);
        $html2 -> clear();
        unset($html2);
        $html3 -> clear();
        unset($html3);

    }

    private function insert_spec($table,$p1, $p2, $p3) {
        $conn = $this -> db();

        $sql = "INSERT INTO " . $table . " (cat,name,price) VALUES (:cat,:name,:price)";
        $q = $conn -> prepare($sql);
        if ($q -> execute(array(':cat' => $p1, ':name' => $p2, ':price' => $p3))) {

            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    //fdjsdfjsdf;jsdfjj
    public function parse_spec2($url,$table) {

        $result = $this -> get_web_page($url);
        $html = new simple_html_dom();
        $html -> load($result);
        $i = 1;
        foreach ($html->find('a[style=color:#9ba0a7;]') as $fk => $element) {
            $url2 = $element -> href;
            $url2 = 'http://speckomzapchast.ru' . $url2;
            echo($url2) . '<br />';
            //$i++;
            //if ($i == 4) {
            //    break;
            //}
            $result2 = $this -> get_web_page($url2);
            $html2 = new simple_html_dom();
            $html2 -> load($result2);

            foreach ($html2->find('div.vm-product-media-container a[title]') as $s) {
                $url3 = 'http://speckomzapchast.ru' . $s -> href;
                //echo($url3) . '<br />';
                $result3 = $this -> get_web_page($url3);
                $html3 = new simple_html_dom();
                $html3 -> load($result3);

                foreach ($html3->find('div.productdetails-view') as $last) {
                    $n = $last -> find('h1', 0) -> plaintext;
                    @$p = $last -> find('span.PricesalesPrice', 0) -> plaintext;
                    //$art = $last -> find('div.vm-product-descr-container-0') -> find('text');
                    //echo $art . '<br>';
                    
                    preg_match('/\b[A-Z0-9]{5,}\b/u', $n, $matches);
                    $catnum = $matches[0];

                    //echo $n . ' - ' . $p . '<br>';
                    //$a[] = array($n, $p, $catnum);
                    
                    $this->insert_spec($table, $catnum, $n, $p);
                }

            }
        }
        //$this -> p($a);
        //return $a;
        //$this -> insert_tot($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);
        $html2 -> clear();
        unset($html2);
        $html3 -> clear();
        unset($html3);

    }

    public function parse_52($url) {

        $result = $this -> get_web_page($url);
        $html = new simple_html_dom();
        $html -> load($result);

        foreach ($html->find('table tr') as $fk => $element) {
            $td = $element -> find('td', 1) -> plaintext;
                $td1 = $element -> find('td', 2) -> plaintext;
                $td2 = $element -> find('td', 3)-> plaintext;
                $td3 = $element -> find('td', 4) -> plaintext;
                //$a[] = array($td -> plaintext, $td1 -> plaintext, $td2 -> plaintext, $td3 -> plaintext);
                $this->insert_spec('parse_avto52', $td,$td1,$td3);
            }

        
        //$this -> p($a);
        //return $a;
        //$this -> insert_tot($a);

        // подчищаем за собой
        $html -> clear();
        unset($html);
        

    }

}
