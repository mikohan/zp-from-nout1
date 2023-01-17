<?php
class Gallery extends Controller {
    
    private $param = '';
    
   
    
    public function index() //We are getting params from url
    {
        $mod = $this -> model('ModGallery');
        $d = $mod->scan_dir(ANG_ROOT . 'public/img/gallery/');
        $this->view('gallery/index', $d);
    }
    
}   