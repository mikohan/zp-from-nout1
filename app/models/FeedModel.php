<?php
require_once('Base.php');
class FeedModel extends Base
{

    public function porterparts_query()
    {
        $m = db();
        $query = 'SELECT a.*, s.ang_subcat FROM angara a
                INNER JOIN ang_subcategories s
                ON a.parent = s.id WHERE a.nal > 0';
        $sth = $m->prepare($query);
        $sth->execute(array());
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } //Конец функции

    public function get_cats(){
        $m = db();
        $query = "SELECT (2000 + id) as id, ang_category as name, parent FROM `ang_categories` UNION SELECT id, ang_subcat as name, parent FROM ang_subcategories";
                $e = $m->prepare($query);
        $e->execute();
        $data = $e->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}