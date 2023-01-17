<?php

class Controller 
{
	public function model($model)
	{
		require_once '../app/models/' .  $model .'.php';
		return new $model();
	}
	
	public function view ($view, $data = array(),$data2 = array(),$data3 = array(), $data4 = array(),$data5 = array(),$data6 = array(), $data7 = array(), $data8 = array())
	{
		    
		require_once '../app/views/' . $view . '.php';
        
	}
    
    public function contr_review ($rev, $data = array())
    {
        require_once  ANG_ROOT . '/public/tpl' . $rev . '.php';
        
    }
    
}
