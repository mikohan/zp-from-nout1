<?php
class Articles extends Core {

    public $param1;

    public function articleInsert($data) {
        $m = $this -> db();
        $data['date'] = date('Y-m-d');

        $sql = "INSERT INTO content_articles (
                          meta_d,
                          meta_k,
                          description,
                          text,
                          date,
                          author,
                          mini_img,
                          title,
                          face_img
                          
                          ) VALUES (
                          :meta_d,
                          :meta_k,
                          :description,
                          :text,
                          :date,
                          :author,
                          :mini_img,
                          :title,
                          :face_img                          
                          )";

        $q = $m -> prepare($sql);
        if ($q -> execute(array( ':meta_d' => $data['meta_d'],
                                 ':meta_k' => $data['meta_k'], 
                                 ':description' => $data['description'],
                                 ':text' => $data['editor1'],
                                 ':date' => $data['date'], 
                                 ':author' => $data['author'],
                                 ':mini_img' => $data['img'],
                                 ':title' => $data['title'],
                                 ':face_img' => $data['face_img'] )))

            // $this -> p($data);

            $d = 'Inserted';
        return $d;
    }//

    private function viewCount($id) {

        $new_view = $myrow["view"] + 1;
        $u = "UPDATE content_articles SET view={$new_view} WHERE id={$id}";
        $q = $m -> prepare($sql);
        $q -> execute();
    }

    public function getArticle() {
        $m = $this -> db();
        $query = "SELECT * FROM content_articles ORDER BY date DESC";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;

    }

    public function modeditart($id) {
        $m = $this -> db();
        $query = "SELECT * FROM content_articles WHERE id = {$id}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;
    }

    public function articleUpdate($data, $id) {
        $m = $this -> db();
        $data['date'] = date('Y-m-d');
        $sql = "UPDATE content_articles
                   SET 
                        meta_d        = :meta_d,
                        meta_k        = :meta_k,
                        description   = :description,                         
                        text          = :text,
                        author        = :author,
                        mini_img      = :mini_img,
                        title         = :title,
                        face_img      = :face_img                          
                 WHERE  id = :id";

        $q = $m -> prepare($sql);
        if ($q -> execute(array( ':meta_d'      => $data['meta_d'],
                                 ':meta_k'      => $data['meta_k'], 
                                 ':description' => $data['description'],
                                 ':text'        => $data['editor1'],                                 
                                 ':author'      => $data['author'],
                                 ':mini_img'    => $data['img'],
                                 ':title'       => $data['title'],
                                 ':face_img'    => $data['face_img'],
                                 ':id'          => $id
                                  )))

             

            $d = 'Inserted';
        return $d;
    }//

    public function moddeleteart($id) {
        $m = $this -> db();
        $query = "DELETE FROM content_articles WHERE id = {$id}";
        $q = $m -> prepare($query);
        $q -> execute();
    }

}
