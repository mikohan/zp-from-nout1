<?php
require_once 'app/views/tpl/header.php';
//$p = new Core();
//$p -> p($data);
?>
<?php if($_SERVER['REQUEST_URI'] == '/admin/insert/price_sol/' AND isset($data)): ?>

<script>alert("Вставлено: <?=$data?> строк")</script>
<?php endif?>



<div class="cotainer-fluid">
    <div class="row">
        <div class="col-md-0">
            <?php
            //require_once 'app/views/tpl/left.php';
            ?>
        </div>
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Porter Админка</a>
                </li>

            </ol>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/admin/app/views/tpl/left.php';?>
                      
                    </div>
                    <div class="col-md-8">
                        <ol class="breadcrumb">
                <li>
                    <a href="/admin">Админка</a>
                </li>

            </ol>
                        <button class="btn btn-primary" type="button">
                          Статей <span class="badge"><?=@$data[0]?></span>
                        </button>
                        <button class="btn btn-primary" type="button">
                          Блондинок <span class="badge"><?=@$data[1]?></span>
                        </button>
                        <button class="btn btn-primary" type="button">
                          Леди <span class="badge"><?=@$data[2]?></span>
                        </button>
                        <button class="btn btn-primary" type="button">
                          Подкатегорий <span class="badge"><?=@$data[3]?></span>
                        </button>
                        <button class="btn btn-success" type="button">
                          Total <span class="badge"><?=@$data[0]+@$data[1]+@$data[2]+@$data[3]?></span>
                        </button>
                        
                        </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>

</div>
<!-- conteiner-fluid -->
<?php
    require_once 'app/views/tpl/footer.php';
?>

