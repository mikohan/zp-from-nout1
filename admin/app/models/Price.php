<?php
class Price extends Core {
    public function price_sol($case = 'porter') {
        $m = $this -> db();
        $row = 1;
        if (($handle = fopen(__DIR__ . "/../../price/" . $case . ".csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 7000, ";")) !== FALSE) {
               if(!isset($data[3]) OR $data['3'] == '') {
                continue;
            }
            @$data[1] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[1]);
            
            @$data[2] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[2]);
            @$data[3] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[3]);
            @$data[4] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[4]);
            @$data[5] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[5]);
            @$data[7] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[7]);
            @$data[6] = preg_replace('/^(\s+)|([^А-я\s\,\.A-z0-9\(\)\_])/ui', '', $data[6]);
            @$data[8] = preg_replace('!(?:\xc2\xa0|[\pZ\s]++)++!', '', $data[8]);
            @$data[0] = trim($data[0]);
            if(!$data[1]){
                $data[1] = 0;
            }
            if(!$data[5]){
                $data[5] = 0;
            }
            if(!$data[4]){
                $data[4] = 0;
            }
            if(!$data[7]){
                $data[7] = 0;
            }

                   $sql = "INSERT INTO angara (
                          ang_name,
                          nal,
                          cat,
                          price,
                          1c_id,
                          parent,
                          ang_sort
                          ) VALUES (
                          :ang_name,
                          :nal,
                          :cat,
                          :price,
                          :1c_id,
                          :parent,
                          :ang_sort
                          )";

            $q = $m -> prepare($sql);

            if ($q -> execute(array(
                ':ang_name' => $data[0],
                ':nal' => $data[1],
                ':cat' => $data[3],
                ':price' => $data[7],
                ':1c_id' => $data[2],
                ':parent' => $data[4], ':ang_sort' => $data[5])))

                $row++;

            }
            fclose($handle);
            print 'Вставлено ' . $row . ' строк';
           
        }
        return $row;
    }//
}
