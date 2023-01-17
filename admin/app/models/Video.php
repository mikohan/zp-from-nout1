<?php
class Video extends Core {

public function insertVideos(){
    $m = $this -> db();
    $q = "SELECT * FROM ang_videos ORDER BY header";
    $t = $m -> prepare($q);
    $t -> execute();
    $data = $t -> fetchAll(PDO::FETCH_ASSOC);
    return($data);
}
public function selectVid($id){
    $m = $this -> db();
    $q = "SELECT * FROM ang_videos WHERE id = ?";
    $t = $m -> prepare($q);
    $t -> execute(array($id));
    $data = $t -> fetchAll(PDO::FETCH_ASSOC);
    return($data);
}

public function insertVid($array){
    $m = $this -> db();
    $q = "INSERT INTO ang_videos (header,part_id,link) VALUES (?,?,?)";
    $t = $m -> prepare($q);
    $t -> execute(array($array['title'], $array['part_id'], $array['link']));
}

public function updateVid($array){
    $m = $this -> db();
    $q = "UPDATE ang_videos SET header = ?, part_id = ?, link = ? WHERE id = ?";
    $t = $m -> prepare($q);
    $t -> execute(array($array['title'], $array['part_id'], $array['link'], $array['id']));
}
public function deleteVid($id){
    $m = $this -> db();
    $q = "DELETE FROM ang_videos WHERE id = ?";
    $t = $m -> prepare($q);
    $t -> execute(array($id));
}

}
