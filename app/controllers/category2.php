<?php

class Category2 extends Controller {
	
	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$user = $this->model('User2');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		
		
		$t = $user -> second_query($param1, $param2);
        $title = $user->title_query($t[0]['id']);
        //p($t);
        if($d = $user -> first_query($param1, $param2 )) {
		$this->view('category2/index', $d, $t, $title);
        } 
        else {
            $this->view('error/index');
        }
		
	}
	
	
}