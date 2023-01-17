<?php

class Textcategory extends Controller {

    public function index($param1 = '') {
        $user = $this -> model('CategoryText');
        //$user->param1 = $param1;
        

        if ($param1) {
            $d = $user -> cattext($param1);
            //echo $param1;
            //$user -> p($d);
            if (isset($_POST['editor1'])) {

                $user -> catInsert($_POST, $param1);
            } else {
                //do smth
            }
        }
        if(!isset($d)){
            $d = '';
        }
        $a = $user -> get_category();
        $this -> view('textcategory/index', $d, $a);
        

    }



}
