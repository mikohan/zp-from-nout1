<?php

class Controller
{
	public function model($model)
	{
		require_once 'app/models/' .  $model .'.php';
		return new $model();
	}

	public function view ($view, $data = array(),$data2 = array(),$data3 = array(), $data4 = array())
	{

		require_once 'app/views/' . $view . '.php';

	}

    public function contr_review ($rev, $data = array())
    {
        require_once  ANG_ROOT . '/public/tpl' . $rev . '.php';

    }
	public function p($array){
		echo "<pre>";
	    print_r($array);
	    echo "</pre>";
	}

}
