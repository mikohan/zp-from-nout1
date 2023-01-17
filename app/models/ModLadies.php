<?php
class ModLadies {
     public function get_ladys_art($limit = '9'){
        $m = db();
        $query = "SELECT id, title, face_img FROM content_ladies_art ORDER BY date DESC LIMIT {$limit}";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            return $d;
        } else {
            return FALSE;
        }
         
    } 
     
      public function get_ladys_blondy($limit = '5'){
        $m = db();
        $query = "SELECT * FROM content_blondy ORDER BY date DESC LIMIT {$limit}";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            return $d;
        } else {
            return FALSE;
        }
         
    } 
     
     
     public function get_art_all($limit = '65'){
        $m = db();
        $query = "SELECT title,id FROM content_ladies_art ORDER BY date DESC LIMIT {$limit} ";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            return $d;
        } else {
            return FALSE;
        }
         
    }  
     
     public function get_lady($id){
        $m = db();
        $query = "SELECT * FROM content_ladies_art WHERE id = ? ";
        $sth = $m -> prepare($query);
        $sth -> execute(array($id));
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            $this -> view('content_ladies_art', $id);
            return $d;
        } else {
            return FALSE;
        }
         
    }  
    
    public function get_blonde($id){
        $m = db();
        $query = "SELECT * FROM content_blondy WHERE id = ? ";
        $sth = $m -> prepare($query);
        $sth -> execute(array($id));
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            $this -> view('content_blondy', $id);
            return $d;
        } else {
            return FALSE;
        }
         
    }  
        
    private function view($table,$id){
        $m = db();
        $query = "UPDATE {$table} SET view = view + 1  WHERE id = {$id}";
        $sth = $m -> prepare($query);
        $sth -> execute(array($id));
        
        
    }    
        
}
    