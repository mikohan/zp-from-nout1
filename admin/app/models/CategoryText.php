<?php
class CategoryText extends Core {
    
    public function get_category() {
        $m = $this -> db();
        $query = "SELECT * FROM ang_categories";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;

    }

    public function catInsert($data,$param1) {
        $m = $this -> db();
        $query = "SELECT id FROM content_cat WHERE cat = {$param1}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
        
        if ($q -> rowCount() > 0 ) {
            $sql = "UPDATE content_cat SET
                          text = :text,
                          meta_t = :meta_t,
                          meta_d = :meta_d,
                          meta_k = :meta_k
                           WHERE cat = {$param1}";
            $q = $m -> prepare($sql);
            $q -> execute(array(':text' => $data['editor1'],':meta_t' => $data['meta_t'], ':meta_d' => $data['meta_d'], ':meta_k' => $data['meta_k']));
        } else {

            $sql = "INSERT INTO content_cat (
                          text,
                          cat,
                          meta_t,
                          meta_d,
                          meta_k
                          ) VALUES (
                          :text,
                          :cat,
                          :meta_t,
                          :meta_d,
                          :meta_k
                          )";

            $q = $m -> prepare($sql);
            if ($q -> execute(array(':text' => $data['editor1'], ':cat' => $param1, ':meta_t' => $data['meta_t'], ':meta_d' => $data['meta_d'], ':meta_k' => $data['meta_k'])))

                // $this -> p($data);

                $d = 'Inserted';
            return $d;
        }
    }//
    
    public function cattext($param1) {
        $m = $this -> db();
        $query = "SELECT a.*, b.*
        FROM content_cat a
        inner join ang_categories b
        on a.cat = b.id 
        where a.cat = {$param1}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;
    }
    
    
    
}
