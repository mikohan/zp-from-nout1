<?php
Class ModMisc {
    
    public function get_stock() {
        $m = db();
        $query = "SELECT * FROM content_spec
                  WHERE enabled = 1
        ";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
       
        return $d;
    }
    
}
