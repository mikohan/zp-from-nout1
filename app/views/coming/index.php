<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Страница в разработке </title>
    <!-- Second header -->  
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
        <?php include ANG_ROOT . "public/tpl/header2.php"?>
        <?php include ANG_ROOT . "public/tpl/header3.php"?>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <!-- Left bar -->
                    <?php include ANG_ROOT . "public/tpl/leftbar.php"?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                 <div class="ang-back">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a href="<?=ANG_HTTP?>/" itemprop="url"><span itemprop="title">Главная</span></a>
                            </li>
                            
                             <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a itemprop="url"></a><span itemprop="title">В разработке</span>
                            </li>
                        </ul>
                    </div>           


<!-- <div class="page-header">
    <h1>Coming soon! <small>В самое ближайшее время мы заполним эту страницу</small></h1>
</div> -->

<!-- Coming Soon - START -->



<div class="bgcontainer" style="margin-top: 10px;">
    <div class="col-md-12 text-center">
        <h1>На реконструкции</h1>
        <br />
    </div>
    <div class="col-md-12 text-center">
        <h2>Эта страничка будет доступна через:</h2>
        <br />
    </div>
    <div class="col-md-2 hidden-xs"></div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_days" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_hours" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_mins" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-9 text-center">
        <div id="progress_secs" style="background-color: transparent;" class="prg"></div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center text-center v-center">
            <h1>Подписаться</h1>
            <p class="lead">Введите емейл для получения рассылки</p>
            <br />
            <form class="col-lg-12">
                <div class="input-group" style="width: 340px; text-align: center; margin: 0 auto;">
                    <input class="form-control input-lg" placeholder="Enter your email address" type="text" />
                    <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                </div>
            </form>
        </div>
    </div>
    <br />
    <br />
    <div class="text-center">
        <h1>Follow us</h1>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
            <a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
            <a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
            <a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
            <a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
        </div>       
    </div>
</div>

<!-- <link rel="stylesheet" type="text/css" href="/public/fonts/font-awesome/css/font-awesome.min.css" /> -->

<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<script type="text/javascript" src="/public/js/jquery-1.10.2.min.js" ></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="/public/js/coming.js" ></script>
<!-- Coming Soon - END -->

    </div>
</div>
                
            
            </div><!-- end Container -->
            
            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>