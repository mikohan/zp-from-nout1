<?php

class Porterparts extends Controller {
    
    public function index( $param1 = '') //We are getting params from url
    {
        $user = $this->model('User');
        $user->param1 = $param1;
        //echo $param1 ;
        
        
        if($d = $user -> porterparts_query($param1)){ //Here we are passing parameters to model and getting it back
        $b = $user -> angara_query_cat($param1);
        $c = $user -> angara_query_cat2($b[0][2]);
        $desc = $user -> get_subcat_description($param1);
        $cat_name = $user->get_cat_name($param1);
        //p($cat_name);
        $colors = $user->colors;
        $this->view('porterparts/index', $d,$b,$c,$desc, $cat_name,$colors,$user);
       
        }
        else {
            $this->view('error/index');
        }
    }
    
    
}