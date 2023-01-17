<?php
class Delivery extends Controller {
    
    public function index() //We are getting params from url
    {
        //$videos = $this -> model('ModVideos'); 
           
        $this->view('delivery/index');
    }
}