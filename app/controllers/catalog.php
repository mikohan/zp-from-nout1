<?php

class Catalog extends Controller {
	
	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$user = $this->model('User');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		
		$d = $user -> third_query($param1, $param2 ); //Here we are passing parameters to model and getting it back
		$t = $user -> title_query($param1, $param2);
        $j = $user -> title_query2($t[0]['id_h2']);
        $a = $user -> a_query($param1, $param2);
		if ($d = $user -> third_query($param1, $param2 )) {
		$this->view('catalog/index', $d, $t, $a, $j);
		
        }
        else {
            $this->view('error/index');
        }
    }
}