<?php
class Artcount extends Core {
    public $table;
    
    public function count_art($table) {
        $m = $this->db();
        $q = "SELECT id FROM {$table}";
        $t = $m -> prepare($q);
        $t -> execute();
        return $t -> rowCount();

    }

    public function title_art($table) {
        $m = $this->db();
        $q = "SELECT title FROM {$table}";
        $t = $m -> prepare($q);
        $t -> execute();
        $data = $t -> fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }

}
