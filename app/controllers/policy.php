<?php

class Policy extends Controller {
    
    private $param = '';
    
   
    
    public function index() //We are getting params from url
    {
       /*
        * 
        $this -> param =  $_POST['sr'];
        //echo $this -> param;   
        $search = $this->model('ModSearch');
        $param1 = $this ->param;
        
        //echo $param1 . ' ' . $param2;
        
        $d = $search -> search_query($param1); //Here we are passing parameters to model and getting it back
        //$t = $search -> subcat_title_query($param1);
        * */
       
        $this->view('policy/index');
    }
}