<?php
class ModNews extends Core {

    public $param1;

    public function articleInsert($data) {
        $m = $this -> db();
        $data['date'] = date('Y-m-d');

        $sql = "INSERT INTO content_news (
                          
                         meta_d,
                          text,
                          date,
                          author,
                          title
                          ) VALUES (
                          :meta_d,
                          :text,
                          :date,
                          :author,
                          :title                 
                          )";

        $q = $m -> prepare($sql);
        if ($q -> execute(array( ':meta_d' => $data['meta_d'],
                                 ':text' => $data['editor1'],
                                 ':date' => $data['date'], 
                                 ':author' => $data['author'],
                                 ':title' => $data['title']
                                  )))

            // $this -> p($data);

            $d = 'Inserted';
        return $d;
    }//

    private function viewCount($id) {

        $new_view = $myrow["view"] + 1;
        $u = "UPDATE content_news SET view={$new_view} WHERE id={$id}";
        $q = $m -> prepare($sql);
        $q -> execute();
    }

    public function getArticle() {
        $m = $this -> db();
        $query = "SELECT  a.author, a.meta_d, b.ang_name, b.1c_id, a.id
        FROM content_news as a
        left join angara as b
        on b.1c_id = a.author
        ORDER BY b.id DESC";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_ASSOC);
        return $d;

    }

    public function modeditart($id) {
        $m = $this -> db();
        $query = "SELECT * FROM content_news WHERE id = {$id}";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;
    }

    public function articleUpdate($data, $id) {
        $m = $this -> db();
        $data['date'] = date('Y-m-d');

        $sql = "UPDATE content_news
                   SET  meta_d       =  :meta_d,
                        text          = :text,
                        author        = :author,
                        title         = :title                                                 
                        WHERE  id = :id";

        $q = $m -> prepare($sql);
        if ($q -> execute(array( ':meta_d'      => $data['meta_d'],
                                 ':text'        => $data['editor1'],                                 
                                 ':author'      => $data['author'],
                                 ':title'       => $data['title'],
                                 ':id'          => $id
                                  )))

            // $this -> p($data);

            $d = 'Inserted';
        return $d;
    }//

    public function moddeleteart($id) {
        $m = $this -> db();
        $query = "DELETE FROM content_news WHERE id = {$id}";
        $q = $m -> prepare($query);
        $q -> execute();
    }

    public function getmain() {
        $m = $this -> db();
        $query = "SELECT text FROM content_main LIMIT 1";
        $q = $m -> prepare($query);
        $q -> execute();
        $d = $q -> fetchAll(PDO::FETCH_NUM);
        return $d;

    }

    public function mainupdate($data) {
        $m = $this -> db();

        $sql = "UPDATE content_main SET
                          text = :text";
        $q = $m -> prepare($sql);
        if ($q -> execute(array(':text' => $data['editor1'])))

            // $this -> p($data);

            $d = 'Inserted';
        return $d;
    }//

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
        $query = "SELECT id FROM content_cat WHERE id = {$param1}";
        $q = $m -> prepare($query);
        $q -> execute();
        if ($q -> rowCount() > 0) {
            $sql = "UPDATE content_cat SET
                          text = :text WHERE cat = {$param1}";
            $q = $m -> prepare($sql);
            $q -> execute(array(':text' => $data['editor1']));
        } else {

            $sql = "INSERT INTO content_cat (
                          text,cat
                          ) VALUES (
                          :text,:cat
                          )";

            $q = $m -> prepare($sql);
            if ($q -> execute(array(':text' => $data['editor1'], ':cat' => $param1)))

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
