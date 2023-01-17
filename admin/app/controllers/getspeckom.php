<?php

class Getspeckom extends Controller {
    
    public $url;
    public $table;
    
    public function index( $param1 = '', $param2 = '') //We are getting params from url
    {
        /*$user = $this->model('User');
        $user->param1 = $param1;
        //echo $param1 . ' ' . $param2;
        $url = 'http://totaldiesel.ru/hyundai/h100-porter/';
        $d = $user -> parse_tot($url ); //Here we are passing parameters to model and getting it back
         * 
         */
        $this->view('getspeckom/index');
        
        
    }
    
    
    
    public function parse_spec(){
        $url = 'http://speckomzapchast.ru/ford-transit';
        $table = 'tmp_spec';
        $user = $this->model('User');
        $user->truncate($table);
        $d = $user -> parse_spec($url,$table);
        
    }
     public function parse_spec_boxer(){
        $url = 'http://speckomzapchast.ru/peugeot-boxer';
        $table = 'tmp_spec_boxer';
        $user = $this->model('User');
        $user->truncate($table);
        $d = $user -> parse_spec2($url,$table);
        
    }
     public function parse_spec_ducato(){
        $url = 'http://speckomzapchast.ru/fiat-ducato';
        $table = 'tmp_spec_ducato';
        $user = $this->model('User');
        $user->truncate($table);
        $d = $user -> parse_spec2($url,$table);
        
    }
      public function parse_spec_crafter(){
        $url = 'http://speckomzapchast.ru/volkswagen-vw-crafter';
        $table = 'tmp_spec_crafter';
        $user = $this->model('User');
        $user->truncate($table);
        $d = $user -> parse_spec2($url,$table);
        
    }
       public function parse_spec_transporter(){
        $url = 'http://speckomzapchast.ru/volkswagen-vw-transporter';
        $table = 'tmp_spec_transporter';
        $user = $this->model('User');
        $user->truncate($table);
        $d = $user -> parse_spec2($url,$table);
        
    }
       
       
       public function parse_tot_starex( ) //We are getting params from url
    {
        $user = $this->model('User');
        $user->truncate('parse_totaldisel');
        $url = array('http://totaldiesel.ru/hyundai/h100-porter/', 'http://totaldiesel.ru/hyundai/porter/');
        
        foreach ($url as $u){
        $d = $user -> parse_tot($u); //Here we are passing parameters to model and getting it back
        
        
        }
    }
     
    
     public function parse_zel( )  {
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
        $url = 'http://www.zapchasti-porter.ru';
        $user -> truncate('parse_mitino');
        
            $d = $user -> mod_parse_mit($url);
       
        
        
    }
    
    
}