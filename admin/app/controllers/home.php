<?php

class Home extends Controller {
	
	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$user = $this->model('Artcount');
        $c = array($user->count_art('content_articles'), $user->count_art('content_blondy'), $user->count_art('content_ladies_art'), $user->count_art('content_subcat'));
        $this->view('home/index',$c);
		
		
	}
	
	
}