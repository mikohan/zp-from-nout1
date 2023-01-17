<?php
class Stock extends Controller {
    
    public function index() //We are getting params from url
    {
        $stock = $this -> model('ModMisc');
        $s = $stock->get_stock();
         
           
        $this->view('stock/index', $s);
    }
}