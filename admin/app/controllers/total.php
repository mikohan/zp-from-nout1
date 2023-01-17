<?php

class Total extends Controller {
    
    public function index( $param1 = '', $param2 = '') //We are getting params from url
    {
        /*$user = $this->model('User');
        $user->param1 = $param1;
        //echo $param1 . ' ' . $param2;
        $url = 'http://totaldiesel.ru/hyundai/h100-porter/';
        $d = $user -> parse_tot($url ); //Here we are passing parameters to model and getting it back
         * 
         */
        $this->view('total/index', $d);
        
        
    }
    
     public function parse_avto52( ) //We are getting params from url
    {
        $user = $this->model('User');
        $user->truncate('parse_avto52');
        $url = 'http://www.avtoru52.ru/man.html';
        if($d = $user -> parse_52($url)){
              echo $url . '<br>';   
        }  
        echo $url;
        echo '<br>';
        for ($i=1; $i <14 ; $i++) { 
         $url = 'http://www.avtoru52.ru/man' . $i . '.html';
            if($d = $user -> parse_52($url)){
              echo $url . '<br>';   
        }  
            }
            
        
        
        
       
        
        
        
    }
    
    public function parse_tot( ) //We are getting params from url
    {
        $user = $this->model('User');
        $user->truncate('parse_totaldisel');
        $url = array('http://totaldiesel.ru/hyundai/h100-porter/', 'http://totaldiesel.ru/hyundai/porter/');
        
        foreach ($url as $u){
        $d = $user -> parse_tot($u ); //Here we are passing parameters to model and getting it back
        
        
        }
    }
     public function parse_zel( ) //We are getting params from url
    {
        $user = $this->model('User');
        $url = array(array(20,'http://www.konsulavto.ru/cat/zapchasti-hyundai/p={@}%7Cq-query=porter%7Cq-type=1'),
                     array(178,'http://www.konsulavto.ru/cat/zapchasti/gruzovye-hyundai/p={@}')) ;
        //$url = 'http://www.konsulavto.ru/cat/zapchasti/gruzovye-hyundai/p={@}';
        $user -> truncate('parse_zel');
        foreach ($url as $u){
            $d = $user -> parse_zel($u[0],$u[1] );
        }
        
        
        
    }
    
    public function parse_mit( ) //We are getting params from url
    {
        $user = $this->model('User');
        $url = 'http://www.zapchasti-solaris.ru';
        $user -> truncate('parse_mitino');
        
            $d = $user -> mod_parse_mit($url);
       
        
        
    }
    
    
}