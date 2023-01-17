<?php 
class ModReviews {
public $t = array();
public function __construct() {
        $m = db();
        $query = 'SELECT * FROM `ang_reviews` ORDER BY rew_date DESC ';
        //$param1 = $m -> quote($param1);
        $sth = $m -> prepare($query);
        $sth -> execute();
       $this -> t = $sth -> fetchAll(PDO::FETCH_NUM);
       //var_dump($this -> t);
        return $this -> t;
    }
}