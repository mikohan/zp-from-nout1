<?php

class Home extends Controller {
	
	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$user = $this->model('User');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		$art = $this -> model('ModArticles');
        $lady = $this -> model('ModLadies');
        $l = $lady -> get_ladys_art('4');
		$a = $art -> get_art('4');// HEre is limit of articles we're getting
		$news = $art -> get_news('6');// HEre is limit of articles we're getting
		$d = $user -> first_query($param1, $param2 ); //Here we are passing parameters to model and getting it back
		$main = $art -> getmain();
        $spec = $art -> get_spec();
        $present = $art -> get_present('6');
		$this->view('home/index', $d, $a, $news, $main, $spec, $l, $present);
		
		
	}
	
	
}