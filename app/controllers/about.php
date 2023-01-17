<?php
class About extends Controller {
    
    public function index() //We are getting params from url
    {
        //$videos = $this -> model('ModVideos'); 
           
        $this->view('about/index');
    }
}