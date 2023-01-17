<?php
require_once 'app/views/tpl/header.php';
?>

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
                    <a href="/admin">Админка</a>
                </li>

                <li class="active">
                    Получение цен
                </li>
            </ol>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="target">Получить Тоталдизель</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="target2">Получить Железяка</button>
                        <button type="button" class="btn btn-primary btn-lg btn-block" id="target3">Получить Митино</button>
                        
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <div class="loading-progress "></div>
                            </li>
                            <li>
                                <div class="loading-progress2 "></div>
                            </li>
                            <li>
                                <div class="loading-progress3"></div>
                            </li>
                        </ul>
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

