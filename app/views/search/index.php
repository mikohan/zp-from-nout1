<?php
//p($data2);
?>
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title><?=title($data[0][1])?> Хендай Портер</title>
    <!-- Second header -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-38611736-1', 'auto');
        ga('send', 'pageview');
        ga('send', 'pageview', '/search/?q=<?=$data2?>');
    </script>
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
                            <a itemprop="url"></a><span itemprop="title">Поиск</span>
                        </li>
                    </ul>
                </div>
                <?php
                    if ($data) {
                        foreach ($data as $key => $line) {
                            if (!$t =  get_image($line[6])) {
                                $t = 'default.jpg';
                            }
                ?>
            <div class="col-xs-6 col-sm-6 col-md-3">
                <a href="<?=ANG_HTTP?>/part/<?=$line[6]?>/<?=str2url($line[1])?>/" class="thumbnail  ang-name" data-toggle="tooltip" data-placement="top" data-original-title="Узнать больше..."> <img src="/public/img/parts/<?=$t?>" alt="<?=$line[1]?>">
            <div class="caption ang-caption">
                <h5 ><?=$line[1]?></h5>
                    <b>Цена: <?=$line[4]?> руб</b>
            </div>
                </a>
            </div>

            <?php } }
                else {
                    echo '<div class="alert alert-danger" role="alert">
                        <a href="/" class="alert-link">Нет результатов поиска венуться на главную...</a>
                        </div>';
                    }
            ; ?>
        </div>
    </div>
</div><!-- end Container -->
<footer class="footer ang_footer">
    <?php include ANG_ROOT . "public/tpl/footer.php"?>
</footer>
    <?php include ANG_ROOT . "public/tpl/footer2.php"?>
