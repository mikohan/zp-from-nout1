<?php class ModVideos {
   public $d = array();
   public function __construct() {
        $dir = ANG_ROOT . 'public/vids';
        $weeds = array('.', '..');
        $this -> d = array_diff(scandir($dir), $weeds);
        //print_r($this -> d);
        return $this -> d;
    }
}
