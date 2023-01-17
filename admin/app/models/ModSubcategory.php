<?php
class ModSubcategory extends Core {
    
    public function get_category() {
        $m = $this -> db();
        $query = "SELECT * FROM ang_subcategories";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;

    }

    public function catInsert($data,$param1) {
        $m = $this -> db();
        $query = "SELECT id FROM content_subcat WHERE cat = {$param1}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
        
        if ($q -> rowCount() > 0 ) {
            $sql = "UPDATE content_subcat SET
                          text = :text,
                          meta_t = :meta_t,
                          meta_d = :meta_d,
                          meta_k = :meta_k,
                          h1 = :h1,
                          img    = :img
                           WHERE cat = {$param1}";
            $q = $m -> prepare($sql);
            $q -> execute(array(':text' => $data['editor1'],':meta_t' => $data['meta_t'], ':meta_d' => $data['meta_d'], ':meta_k' => $data['meta_k'], ':h1' => $data['h1'], ':img' => $data['img']));
        } else {

            $sql = "INSERT INTO content_subcat (
                          text,
                          cat,
                          meta_t,
                          meta_d,
                          meta_k,
                          img
                          ) VALUES (
                          :text,
                          :cat,
                          :meta_t,
                          :meta_d,
                          :meta_k,
                          :img
                          )";

            $q = $m -> prepare($sql);
            if ($q -> execute(array(':text' => $data['editor1'], ':cat' => $param1, ':meta_t' => $data['meta_t'], ':meta_d' => $data['meta_d'], ':meta_k' => $data['meta_k'], ':img' => $data['img'])))

                // $this -> p($data);

                $d = 'Inserted';
            return $d;
        }
    }//
    
    public function cattext($param1) {
        $m = $this -> db();
        $query = "SELECT a.*, b.*
        FROM content_subcat a
        inner join ang_subcategories b
        on a.cat = b.id 
        where a.cat = {$param1}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;
    }
    
    
    
}
