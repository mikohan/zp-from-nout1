<?php
class Error extends Controller {
    
    public function index() //We are getting params from url
    {
        //$videos = $this -> model('ModVideos'); 
           
        $this->view('error/index');
    }
}