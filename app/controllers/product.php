<?php

class Product extends Controller {
	
	public function index( $param1 = '') //We are getting params from url
	{
		$user = $this->model('User');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		$t = $user -> subcat_title_query($param1);
        $desc = $user -> get_cat_description($param1);
		if($d = $user -> subcat_query($param1)) { 
		$this->view('product/index', $d, $t, $desc);
        } 
        else {
        $this->view('error/index');
		 
        }
	}
	
	
}