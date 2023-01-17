<?php
class ModArticles {
    
    public function get_art($limit = '5'){
        $m = db();
        $query = "SELECT * FROM content_articles ORDER BY date DESC LIMIT {$limit}";
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
        $query = "SELECT title,id FROM content_articles ORDER BY date DESC LIMIT {$limit} ";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            return $d;
        } else {
            return FALSE;
        }
         
    }
   public function get_last_art($id){
        $m = db();
        $query = "SELECT * FROM content_articles WHERE id = {$id}";
        $query2 = "UPDATE content_articles SET view = view + 1  WHERE id = {$id}";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            $sth2 = $m ->prepare($query2);
            $sth2 -> execute();
            return $d;
        } else {
            return FALSE;
        }
         
    } 
   
   public function get_news($limit = '5'){
        $m = db();
        $query = "SELECT a.author, b.ang_name, b.1c_id, a.id
        FROM content_news as a
        left join angara as b
        on b.1c_id = a.author
        ORDER BY a.id DESC LIMIT {$limit}";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            return $d;
        } else {
            return FALSE;
        }
         
    }
    public function get_last_news($id){
        $m = db();
        $query = "SELECT * FROM content_news WHERE id = {$id}";
        $query2 = "UPDATE content_news SET view = view + 1  WHERE id = {$id}";
        $sth = $m -> prepare($query);
        $sth -> execute();
        if($d = $sth -> fetchAll(PDO::FETCH_ASSOC)){
            $sth2 = $m ->prepare($query2);
            $sth2 -> execute();
            return $d;
        } else {
            return FALSE;
        }
        
        
         
    }
    public function getmain() {
        $m = db();
        $query = "SELECT text FROM content_main LIMIT 1";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;

    }
    
    public function get_spec() {
        $m = db();
        $query = "SELECT a.ang_name, a.price, a.1c_id 
        FROM angara a
        INNER JOIN ang_spec b
        on a.1c_id = b.1c_id
        ";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
        return $d;

    }
    /*
     * Getting presents for main page
     */
     public function get_present($limit) {
        $m = db();
        $query = "SELECT * FROM content_spec
                  WHERE enabled = 1
                  LIMIT $limit
        ";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
       
        return $d;
     }
     
      
}
