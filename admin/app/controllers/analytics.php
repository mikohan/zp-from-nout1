<?php
class Analytics extends Controller {

    public function index($param1 = '')//We are getting params from url
    {

        if (isset($_POST['sr'])) {
            $v = $_POST['sr'];
        } else {
            $v = '';
        }

        $user = $this->model('User');
        
         $d = $user -> get_data($v );
         $name = array('Ангара название', 'Ангра цена', 'Тоталдизель цена','Железяка цена', ' Тотал название', 'Железяка название ', 'Каталожный номер'); 
         
        $this -> view('analytics/index', $v,$d, $name);

    }
    
      public function angtotzel ($param1 = '')//We are getting params from url
    {

        if (isset($_POST['sr'])) {
            $v = $_POST['sr'];
        } else {
            $v = '';
        }

        $user = $this->model('User');
        
         $d = $user -> get_data($v );
         $name = array('Ангара название', 'Ангра цена', 'Тоталдизель цена','Железяка цена', ' Тотал название', 'Железяка название ', 'Каталожный номер'); 
         
        $this -> view('analytics/index', $v,$d, $name);

    }
    
public function getmit($param1 = '')//We are getting params from url
    {

        if (isset($_POST['sr'])) {
            $v = $_POST['sr'];
        } else {
            $v = '';
        }

        $user = $this->model('User');
        
         $d = $user -> modgetmit($v); 
         // $t = $user -> get_columns();
         $name = array('Ангара название', 'Ангра цена', 'Митино цена', ' Митино название', 'Каталожный номер');
         
        $this -> view('analytics/index', $v,$d,$name);

    }

}
