<?php
class Reviews extends Controller {
    
    public function index() //We are getting params from url
    {
        $d = $this -> model('ModReviews');
        $this->view('reviews/index', $d);
    }
}