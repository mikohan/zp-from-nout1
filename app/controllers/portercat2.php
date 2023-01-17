<?php

class Portercat2 extends Controller {
    
    public function index( $param1 = '', $param2 = '') //We are getting params from url
    {
        $user = $this->model('User2');
        $user->param1 = $param1;
        //echo $param1 . ' ' . $param2;
        //$art = $this -> model('ModArticles');
        //$a = $art -> get_art('3');// HEre is limit of articles we're getting
        //$news = $art -> get_news('4');// HEre is limit of articles we're getting
        $d = $user -> first_query($param1, $param2 ); //Here we are passing parameters to model and getting it back
        //$main = $art -> getmain();
        //$spec = $art -> get_spec();
        $this->view('portercat2/index', $d);
        
        
    }
    
    
}