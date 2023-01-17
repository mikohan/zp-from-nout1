<?php include ANG_ROOT . "public/tpl/header1.php" ?>
    <title>Купить <?= $data2[0][1] ?> Хендай Портер | цены, схемы, H100, Porter	</title>
    <meta name="description" content="<?= $data2[0][1] ?> для Хендай Портер. Интернет магазин запчастей на Портер в Москве. Гарантия возврата и доставка по всей России.">
    <meta name="keywords" content="<?= $data2[0][1] ?> Хендай Портер">
    <!-- Second header -->
<?php include ANG_ROOT . "public/tpl/header2.php" ?>
<?php include ANG_ROOT . "public/tpl/header3.php" ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-sm hidden-xs">
                <!-- Left bar -->
                <?php include_once ANG_ROOT . "public/tpl/leftbar.php" ?>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="ang-back">
                    <ul class="breadcrumb">
                        <li  itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
                        </li>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
                            <a href="<?= ANG_HTTP ?>/product/<?= $data3[0][0] ?>/<?= str2url($data3[0][1]) ?>-porter/" itemprop="url"><?= $data3[0][1] ?></a>
                        </li>
                        <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a itemprop="url"></a><span itemprop="title"><?= $data2[0][1] ?></span>
                        </li>
                    </ul>
                </div>
        <div class="row">
        <!-- Beginning of description category -->
            <div class="media">
                <div class="media-body">
                    <div class="row text-center">
                        <h1 class="main-h1" >Купить <?= $data2[0][1] ?> для Хендай Портер</h1>
                    </div>
                        <noindex>
                            <div class="category-desc" >
                                <?php if (isset($data4[0]['img']) and $data4[0]['img'] != false) { ?>
                                    <span><img class="img-responsive" width="200px" src="/public/img/timthumb.php?src=/public/img/articles/<?= $data4[0]['img'] ?>&w=200"
                                        <?php if (isset($data4[0]['meta_t']) and $data4[0]['meta_t'] != false): ?> alt="<?= $data4[0]['meta_t'] ?>" title="<?= $data4[0]['meta_t'] ?>" /></span>
                                        <?php else: ?>
                                            alt="<?= $data4[0]['meta_t'] ?>" title="<?= $data2[0][1] ?> для  Hyundai Porter (Хендай Портер)" /></span>
                                        <?php endif ?>
                                        <?php } ?>
                                        <?php if (isset($data4[0]['img']) and $data4[0]['img'] != false) {
                                            echo $data4[0]['short_text'];
                                        } ?>
                            </div>
                                </noindex>
                                <?php if (isset($data4[0]['img']) and $data4[0]['img'] != false) { ?>
                                    <div class="category-button">
                                        <a href="#raptors"><button type="button" class="btn btn-primary">Читать далее . . .</button></a>
                                    </div>
                                <?php } ?>
                        </div>
                </div>
            <div class="row padding-10">
                <?php foreach ($data as $sub_name2 => $subcat2): ?>
                <?php $short_full_name2 = explode('-', $sub_name2); ?>
                <?php if (empty($subcat2)) {
                    continue;
                    }
                    $hash = array_rand($data6);
                    $h = $data6[$hash];
                    //p($h);
                    ?>
                <a href='#<?= $sub_name2 ?>' class='hashtag'> <span>#<span style="font-weight: bold; color:<?= $h ?>"><?= $short_full_name2[0] ?></span>&nbsp&nbsp&nbsp&nbsp </span></a>
                <?php endforeach ?>
            </div>
            <?php
                foreach ($data as $cat_name => $cat_parts): 
                if (empty($cat_parts)) {
                    continue;
                }
            ?>
            <div class="row">
                <div class="col-md-12">
                <h2 class="parts_line" id="<?= $cat_name ?>">
                    <?php $cat_name = $data7->mb_ucfirst($cat_name, 'UTF-8'); ?>
                    <?php echo explode('-', $cat_name)[0]; ?>
                </h2>
                <hr>
                <?php foreach ($cat_parts as $line): ?>

            <div class="col-xs-6 col-md-3">
                <a href="<?= ANG_HTTP ?>/part/<?= $line['1c_id'] ?>/<?= str2url($line['ang_name']) ?>/"
                class="thumbnail  ang-name" data-toggle="tooltip" data-placement="top" data-original-title="Узнать больше...">
                <img src="/public/img/timthumb.php?src=/public/img/parts/<?= get_image($line['1c_id']) ?>&w=179" alt="<?= $line['ang_name'] ?>"
                title="<?= $line['ang_name'] ?>">
                <div class="caption ang-caption">
                    <h5 ><?= $line['ang_name'] ?></h5>
                    <p>Цена: <strong><?= $line['price'] ?></strong></p>
                </div></a>
                </div>
            <?php endforeach ?>
            </div>
            </div>
<?php endforeach  ?>
</div>
<div class="row">
                <div class="col-md-12">
                    <div class="row text-center">
                       <a name="raptors"> <h2 class="main-h2" >Описание категории <?= $data5['ang_subcat'] ?> для Хундай Портер</h2></a>

                     </div>
                    <div class="panel panel-default">
                        <div class="panel-body ang-text-cat">

                           <?php if (isset($data4[0])) {
                               echo $data4[0]['text'];
                           } ?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
     </div><!-- end Container -->

            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php" ?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php" ?>
