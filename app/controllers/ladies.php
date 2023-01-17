<?php
class Ladies extends Controller {

    public function index() {
        $lad = $this -> model('ModLadies');
        $d = $lad -> get_ladys_art('9');
        $a = $lad -> get_art_all();
        $c = $lad -> get_ladys_blondy('9');
        $blond = $lad -> get_ladys_blondy('30');

        $this -> view('ladies/index', $d, $a, $c, $blond);
    }

    public function girl($param = '') {

        $lad = $this -> model('ModLadies');
        $a = $lad -> get_art_all();
        if ($d = $lad -> get_lady($param)) {
            $this -> view('ladies/girl', $d, $a, 'girl');
        } else {
            $this -> view('error/index');
        }

    }

    public function blonde($param = '') {

        $lad = $this -> model('ModLadies');
        $a = $lad -> get_ladys_blondy();
        if ($d = $lad -> get_blonde($param)) {
            $this -> view('ladies/girl', $d, $a, 'blonde');
        } else {
            $this -> view('error/index');
        }
    }

}
