<?php
class Documents extends Controller {
    
    private $param = '';
    
   
    
    public function index() //We are getting params from url
    {
        $this->view('documents/index');
    }
    
    
}