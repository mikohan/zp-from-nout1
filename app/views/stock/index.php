<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title> Сайт Запчасти для Портер 1,2 ! Подарки + Доставка!</title>
        <meta name="description" content="★ 97% Запчастей на Хендай Портер 1 и 2 Готовы к отправке. ★ Подарки всем клиентам ★  Задайте любые вопросы по  ☎ <?=TELEPHONE1?>">
        <meta name="keywords" content="запчасти Хендай Портер, запчасти Хундай Портер, запчасти Hyundai Porter, запчасти Хундай Портер отправка в регионы ">
    <!-- Second header -->
        <?php include ANG_ROOT . "public/tpl/header2.php"?>
        <?php include ANG_ROOT . "public/tpl/header3.php"?>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <!-- Left bar -->
                    <?php include_once ANG_ROOT . "public/tpl/leftbar.php"?>
                </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="ang-back">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a href="<?=ANG_HTTP?>/" itemprop="url"><span itemprop="title">Главная</span></a>
                            </li>

                             <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a itemprop="url"></a><span itemprop="title">Акции</span>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                        <div class="alert alert-success" role="alert"><h3>Страница в разработке</h3></div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xs-12">
                        <div class="alert alert-success" role="alert"><h3>Делаем подарки нашим клиентам с
                        <?php
                        setlocale(LC_ALL, 'ru_RU.UTF-8');
                        echo strftime('%d %b', strtotime("-3 day"));
                        echo " по ";
                        echo strftime('%d %b', strtotime("+7 day"));
                        echo " " . strftime('%Y') . " года.";
                        ?></h3></div>
                        </div>
                    </div> -->
                  <!-- <div class="row">
            <?php foreach ($data  as $present) { ?>

                      <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="thumbnail">
                          <img src="/public/img/spec/<?=$present['img']?>" alt="<?=$present['name']?>">
                          <div class="caption-white caption-white1">
                            <h3><?=$present['name']?></h3>
                            <p><?=red_text($present['spec'])?></p>

                          </div>
                        </div>
                      </div>


                    <?php } ?>
               </div> -->
                      </div>
                </div>

            </div>
            </div><!-- end Container -->

            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>
