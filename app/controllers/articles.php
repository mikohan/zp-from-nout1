<?php

class Articles extends Controller {

    public function index($param1 = '', $param2 = '') {
        $param1 = intval($param1);
        $mod = $this -> model('ModArticles');
         //var_dump($param1);
        if (!$param1) {
            $d = $mod -> get_art('30');

            $this -> view('articles/index', $d);
        } else {
            if ($d = $mod -> get_last_art($param1)) {
                $a = $mod -> get_art_all('70');
                $this -> view('article/index', $d, $a);
            } else {
                $this -> view('error/index');
            }
        }
    }

}
