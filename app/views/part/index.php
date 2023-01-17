<?php

function make_h1($old_name)
{
    $prod_name_arr = explode(' ', $old_name);
    $mod_rus_pos = array_search('ПОРТЕР', $prod_name_arr);
    $mod_rus_pos2 = array_search('ПОРТЕР2', $prod_name_arr);

    $filtered = array_filter($prod_name_arr, static function ($elem) {
        return $elem != "PORTER" && $elem != "ПОРТЕР" && $elem != "PORTER2" && $elem != "ПОРТЕР2";
    });
    $matches = preg_grep("/^\d+.+$/", $filtered);
    $cat_number = trim(implode(' ', $matches));

    $mod_name = 'Портер';
    if ($mod_rus_pos2) {
        $mod_name = 'Портер 2';
    }

    $name_arr_pos = array_search($cat_number, $filtered);
    if ($name_arr_pos) {
        unset($filtered[$name_arr_pos]);
    }

    $brand_match = preg_grep("/\b[a-zA-z]+\b/i", $filtered);
    $brand = trim(implode(' ', $brand_match));
    $brand_arr_pos = array_search($brand, $filtered);
    if ($brand_arr_pos) {
        unset($filtered[$brand_arr_pos]);
    } else {
        $brand = 'Оригинал';
    }

    $prod_name = trim(implode(' ', $filtered));
    $h1 = $prod_name . ' Хендай' . ' ' . $mod_name . ' ' . $cat_number . ' ' . $brand;
    $title = 'Купить ' . $h1 . ' -запчасти, цены, схемы.';
    $description = $prod_name . ' Хендай ' . $mod_name . ' в наличии. Интернет магазин запчастей на Портер в Москве. Гарантия возврата и доставка по всей России.';
    $ret = ['h1' => $h1, 'title' => $title, 'description' => $description];
    return $ret;
}
$meta = make_h1($data[0][0][1]);

$h1 = $meta['h1'];
$title = $meta['title'];
$description = $meta['description'];

?>
<?php include ANG_ROOT . "public/tpl/header1.php" ?>
<title>
    <?= $title ?>
</title>
<meta name="description" content="<?= $description ?>">

<meta name="keywords" content="<?= $data[0][0][1] ?>">
<meta property="og:url" content="<?='https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?= $data[0][0][1] . ' ' . $data[0][0][4] . ' ' ?>" />
<meta property="og:image"
    content="<?='https://' . $_SERVER['HTTP_HOST'] . '/public/img/parts/' . get_image($data[0][0][6]) ?>" />
<?php if ($data[0][0][10]): ?>
<meta property="og:description" content="<?= cutoff(strip_tags($data[0][0][10]), 499) ?>" />
<?php else: ?>
<meta property="og:description" content="<?= cutoff($data[0][0][5], 499) ?>" />
<?php endif ?>

<!-- Second header -->
<?php include ANG_ROOT . "public/tpl/header2.php" ?>
<?php include ANG_ROOT . "public/tpl/header3.php" ?>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-sm hidden-xs">
            <!-- Left bar -->
            <?php include ANG_ROOT . "public/tpl/leftbar.php" ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="ang-back">
                <ul class="breadcrumb">
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                        <a href="<?= ANG_HTTP ?>/" itemprop="url"><span itemprop="title">Главная</span></a>
                    </li>
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                        <a href="<?= ANG_HTTP ?>/product/<?= $data3[0][0] ?>/<?= str2url($data3[0][1]) ?>-porter/"
                            itemprop="url"><span itemprop="title">
                                <?= $data3[0][1] ?>
                            </span></a>
                    </li>
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                        <a href="<?= ANG_HTTP ?>/porterparts/<?= $data2[0][0] ?>/<?= str2url($data2[0][1]) ?>-porter/"
                            itemprop="url"><span itemprop="title">
                                <?= $data2[0][1] ?>
                            </span></a>
                    </li>
                    <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb" class="active">
                        <!-- <a itemprop="url" href="<?= $_SERVER['REQUEST_URI']; ?>"> -->
                        <span itemscope itemprop="title">
                            <?= cutter($data[0][0][1]) ?>
                        </span>
                        <!-- </a> -->
                    </li>
                </ul>
            </div>
            <?php include ANG_ROOT . "public/tpl/prod.php"; ?>
            <div class="row">
                <div class="col-md-12">
                    <h3>С этой запчастью также искали:</h3>
                </div>

                <?php foreach ($data[1] as $key => $line) { ?>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <a href="<?= ANG_HTTP ?>/part/<?= $line[6] ?>/<?= str2url($line[1]) ?>"
                        class="thumbnail  ang-name ang-thumb" data-toggle="tooltip" data-placement="top"
                        data-original-title="Узнать больше..."><img
                            src="/public/img/timthumb.php?src=/public/img/parts/<?php echo get_image($line[6]); ?>&w=120"
                            alt="<?= $line[1] ?>">
                        <div class="caption ang-caption">
                            <h6>
                                <?= $line[1] ?>
                            </h6>
                            <p>Цена: <?= $line[4] ?>
                            </p>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php if ($data4) { ?>
            <div class="row">
                <div class="col-md-12">
                    <!--  <div class="well">
                                <h4>Статья для повышения саморазвития.</h4>
                            </div> -->
                    <div class="part-art">
                        <a class="a-text" href="<?= ANG_HTTP ?>/articles/<?= $data4[0][0] ?>/">
                            <h3>
                                <?= $data4[0][9] ?>
                            </h3>
                        </a>
                        <?php if ($data4[0][8]): ?>
                        <img class="img-art-2" width="100"
                            src="https://<?= $_SERVER['HTTP_HOST'] . '/public/img/articles/' . $data4[0][8] ?>"
                            alt="<?= $data4[0][9] ?>">
                        <?php endif ?>
                        <?= $data4[0][3] ?>
                        <small><a href="<?= ANG_HTTP ?>/articles/<?= $data4[0][0] ?>/">Читать всю статью ...</a></small>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>


</div><!-- end Container -->
<footer class="footer ang_footer">
    <?php include ANG_ROOT . "public/tpl/footer.php" ?>

</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php" ?>