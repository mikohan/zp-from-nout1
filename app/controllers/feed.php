<?php
class Feed extends Controller {
    
    public function index() //We are getting params from url
    {
        $model = $this -> model('FeedModel');
        $data = $model->porterparts_query();
        $cats = $model->get_cats();

           
        $this->view('feed/index', $data, $cats);
    }
}