<?php

class Part extends Controller {

	public function index( $param1 = '') //We are getting params from url
	{
	     //p_a($_POST);

         if(!empty($_POST)) {

           $this -> rev($_POST);
           header("Location: ".$_SERVER["REQUEST_URI"]);

        }

		$user = $this->model('User');
		$user->param1 = $param1;
		//echo $param1 . ' ' . $param2;
		if($d = $user -> angara_query2($param1)) {
            $b = $user -> angara_query_cat($d[0][0][7]);
            $c = $user -> angara_query_cat2($b[0][2]);
            $f = $user -> angara_query_articles($d[0][0][3]);
            $cheap = $user -> cheap_query($d[0][0][3],$d[0][0][4]);
			$vid = $user -> getVids($param1);
			$get_catalog_page_p1=get_catalog_page_p1($d[0][0][3]);
			$get_catalog_page_p2=get_catalog_page_p2($d[0][0][3]);
			
           // p($d);

			$this->view('part/index', $d, $b, $c, $f, $cheap, $vid,$get_catalog_page_p1,$get_catalog_page_p2,$param1);
        }
        else {
            $this->view('error/index');
        }

	}//
    /*
     * Insert comments of goods
     */
    private function rev($post) {
        //p_a($post);
        $user = $this->model('User');
        $user -> insert_reviews($post);
    }//
}
