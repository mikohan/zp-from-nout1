<?php

class Ckeditor extends Controller {

    public function index($param1 = '', $param2 = '')//We are getting params from url
    {
        $user = $this -> model('Articles');
        //$user->param1 = $param1;
        $a = $user -> getArticle();

        if ($param1) {
            $d = $user -> modeditart($param1);
            //echo $param1;
            //$user -> p($d);
            if (isset($_POST['editor1'])) {

                $user -> articleUpdate($_POST, $param1);
            } else {
                //do smth
            }
        }
        if(!isset($d)){
            $d = '';
        }
        $a = $user -> getArticle();
        $this -> view('ckeditor/index', $d, $a);

    }

    public function editart($param1 = '') {
        $user = $this -> model('Articles');

        if (isset($_POST['editor1'])) {
           //$user -> p($_POST);
            $d = $user -> articleInsert($_POST);
        } else {
            echo 'Hyi';
        }
        $d = '';
        $a = $user -> getArticle();
        $this -> view('ckeditor/index', $d, $a);
    }

    public function deleteart($param1) {
        $user = $this -> model('Articles');
        if ($param1) {
            $user -> moddeleteart($param1);
            header("Location: /admin/ckeditor/");
        }
    }

}
