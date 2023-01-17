<?php

class Videos extends Controller {

	public function index( $param1 = '', $param2 = '') //We are getting params from url
	{
		$obj = $this->model('Video');

		if($param1 == 'delete'){
			$obj->deleteVid($param2);
			header("Location: /admin/videos/");
		}
        if((isset($_POST['id']) AND $_POST['id'] != '') AND isset($_POST['action'])){
            $obj->updateVid($_POST);
			header("Location: /admin/videos/" . $_POST['id'] . '/');
        }elseif((!isset($_POST['id']) OR $_POST['id'] == '') AND isset($_POST['action'])){
            $obj->insertVid($_POST);
			header("Location: /admin/videos/");
        }else{
            //echo "Nothing";
        }



        if(isset($param1)){
            $d = $obj -> insertVideos();
            $vid = $obj->selectVid($param1);
            $this->view('video/index',$d,$vid);
        }else{
            $d = $obj -> insertVideos();
            $this->view('video/index',$d);
        }


	}


}
