<?php

class Coming extends Controller {
    
    public function index() //We are getting params from url
    {
       
        $this->view('coming/index');
        
    }
}