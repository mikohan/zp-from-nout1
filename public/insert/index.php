
<link type="text/css" rel="stylesheet" href="/public/css/bootstrap.min.css" />
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once ('lock.php');
require_once ('../../app/lib/func.php');


if(isset($_GET['do_insert']) && $_GET['do_insert'] == 'yes')
{
       
    angara_insert();
}
else {
    echo "HUI";
}
echo "<form method='get'>
    <input type='hidden' name='do_insert' value='yes'>
    <button class='btn btn-primary' type='submit'>Обновить прайс</button>
</form>";


function angara_insert() {
    $m = db();
    $truncate = 'TRUNCATE TABLE angara';
    $t = $m -> prepare($truncate);
    $t -> execute();
    $row = 1;
    if (($handle = fopen("price/angara.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            
            $data[1] = preg_replace('/^(\s+)|([^А-я\s\,\.A-z0-9\(\)\_])/ui', '', $data[1]);
            $data[2] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[2]);
            $data[3] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[3]);
            $data[4] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[4]);
            $data[5] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[5]);
            $data[6] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[6]);
            $data[7] = preg_replace('/^(\s+)|([^А-я\s\,\.A-z0-9\(\)\_])/ui', '', $data[7]);
            $data[8] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[8]);
            $data[1] = trim($data[1]);
            $sql = "INSERT INTO angara (
              ang_name,
              nal,
              cat,
              price,
              description,
              1c_id,
              parent,
              ang_sort
              ) VALUES (
              :ang_name,
              :nal,
              :cat,
              :price,
              :description,
              :1c_id,
              :parent,
              :ang_sort
              )";

            $q = $m -> prepare($sql);
            if ($q -> execute(array(':ang_name' => $data[1], ':nal' => $data[2], ':cat' => $data[4], ':price' => $data[8], ':description' => $data[7], ':1c_id' => $data[3], ':parent' => $data[5], ':ang_sort' => $data[6])))
                $row++;

            //p($data);
        }
        fclose($handle);
        print 'Вставлено ' . $row . ' строк' ;
    }
}
