<?php

$dataset = left_bar();
//$dataset1 = left_bar_sub();
// p($dataset);
$url = explode('/', $_SERVER['REQUEST_URI']);
//p_a($url);
if (!isset($url[2])) {
    $url[2] = '';
}
?>

<div id="responsive-menu1">
    <ul class="nav nav-pills nav-stacked ang-nav-pills">
        <li role="presentation" class="btn-primary">
            <a class="menu" href="<?= ANG_HTTP ?>/portercat/"><span class="glyphicon glyphicon-play ang-play"
                    aria-hidden="true"></span> Каталог Портер I</a>
        </li>
        <li role="presentation" class="btn-primary">
            <a class="menu" href="<?= ANG_HTTP ?>/portercat2/"><span class="glyphicon glyphicon-play ang-play"
                    aria-hidden="true"></span> Каталог Портер II</a>
        </li>
        <?php foreach ($dataset as $left) { ?>
        <li role="presentation"
            class="<?php echo ($left['id'] == $url[2]) && ($url[1] == 'product') ? 'ang-active' : ''; ?> btn-primary">
            <a class="menu"
                href="<?= ANG_HTTP ?>/product/<?= $left['id'] ?>/<?= str2url($left['ang_category']) ?>-porter/"><span
                    class="glyphicon glyphicon-play ang-play" aria-hidden="true"></span> <?= $left['ang_category'] ?></a>
        </li>

        <?php } ?>
    </ul>
</div>
<div class="container-fluid hidden-xs hidden-sm">
    <div class="row">

    </div>
</div>