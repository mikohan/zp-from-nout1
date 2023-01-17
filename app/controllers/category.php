<?php

class Category extends Controller {
	
	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$user = $this->model('User');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		
		
		$t = $user -> second_query($param1, $param2);
        if($d = $user -> first_query($param1, $param2 )) {
		$this->view('category/index', $d, $t);
        } 
        else {
            $this->view('error/index');
        }
		
	}
	
	
}