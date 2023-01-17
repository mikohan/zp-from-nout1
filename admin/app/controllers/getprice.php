<?php

class GetPrice extends Controller {
    
    public function index( $param1 = '', $param2 = '') //We are getting params from url
    {
        //$user = $this->model('User');
        //$user->param1 = $param1;
        //echo $param1 . ' ' . $param2;
        
        //$d = $user -> first_query($param1, $param2 ); //Here we are passing parameters to model and getting it back
        $this->view('getprice/index');
        
        
    }
    
    
}