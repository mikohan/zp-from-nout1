<?php

class News extends Controller {

    public function index($param1 = '', $param2 = '')//We are getting params from url
    {
        $user = $this -> model('ModNews');
        //$user->param1 = $param1;
        $a = $user -> getArticle();
            // $user -> p($_POST);
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
        $this -> view('news/index', $d, $a);

    }

    public function editart($param1 = '') {
        $user = $this -> model('ModNews');

        if (isset($_POST['editor1'])) {
            //$user -> p($_POST);
            $d = $user -> articleInsert($_POST);
        } else {
            echo 'Hyi';
        }
        $d = '';
        $a = $user -> getArticle();
        $this -> view('news/index', $d, $a);
    }
    
    

    public function deleteart($param1) {
        $user = $this -> model('ModNews');
        if ($param1) {
            $user -> moddeleteart($param1);
            header("Location: /admin/news/");
        }
    }
    
    
        public function mainpage() {
        $user = $this -> model('ModNews');

        if (isset($_POST['editor1'])) {
            //$user -> p($_POST);
            $d = $user -> mainupdate($_POST);
        } else {
            echo 'Hyi';
        }
        $d = '';
        $a = $user -> getmain();
        $this -> view('main/index', $d, $a);
    
    }

}
