<?php

class Insert extends Controller {
    
    public function index() //We are getting params from url
    {
        
        //$this->view('total/index');
        
        
    }
    
    public function price_por() {
        $mod = $this->model('Price');
        $mod -> truncate('angara');
        $d = $mod -> price_sol();
    }
    
    public function price_sol() {
        $mod = $this->model('Price');
        $mod -> truncate('angara');
        $d = $mod -> price_sol();
        
        $this->view('home/index',$d);
    }
        
}