<?php
//p($data3);
?>


<?php include ANG_ROOT . "public/tpl/header1.php"?>
<title><?=$data[0]['title'] ?> </title>
<meta name="description" content="<?=$data[0]['meta_d'] ?>">
<meta name="keywords" content="<?=$data[0]['meta_k'] ?>">

<meta property="og:url" content="<?='http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?=$data[0]['title'] ?>" />
<meta property="og:description" content="<?=cutoff($data[0]['text'], 499) ?>" />

<meta property="og:image" content="<?='http://' . $_SERVER['HTTP_HOST'] . '/public/img/articles/' . $data[0]['face_img']?>" />


<!-- Second header -->
<?php include ANG_ROOT . "public/tpl/header2.php"?>
<?php include ANG_ROOT . "public/tpl/header3.php"?>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <!-- Left bar -->
            <?php include ANG_ROOT . "public/tpl/leftbar.php"
            ?>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9">
            <div class="ang-art-bread">
                <ul class="breadcrumb">
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
                    </li>
                    <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="/ladies/" itemprop="url"><span itemprop="title">Обзоры</span></a>
                    </li>
                    

                    <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a itemprop="url"></a><span itemprop="title"><?=$data[0]['title'] ?></span>
                    </li>
                </ul>
        </div>
            <div class="row">
                <div class="col-md-12">
                <div class="panel panel-default ">
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-md-6">
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,gplus" data-yashareTheme="counter"></div>
                        </div>
                        <div class="col-md-6 ">
                           <small class="pull-right">Дата: <?=$data[0]['date'] ?> </small>
                        </div>
                        </div>
                        <h1><?=$data[0]['title'] ?></h1>
                         <?=$data[0]['text'] ?>
                          <div class="col-md-6">
                           <small>Автор: <?=$data[0]['author'] ?></small>
                          </div>
                         <div class="col-md-6">
                         <div class="pull-right"><i class="fa fa-eye"></i> <span class="badge"><?=$data[0]['view']?></span></div>
                         </div>
                    </div>
                    <?php include ANG_ROOT . "public/tpl/vkcomments.php"?>
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                    
                </div>
                </div>
                <!-- <div class="col-md-3">
                    <h5>Материал</h5>
                    <?php foreach ($data2 as $a) { ?>
                      
                          <a href="/ladies/<?=$data3?>/<?=$a['id'] ?>/"><small><i class="fa fa-heart"></i> <?=$a['title'] ?></small></a><br />
                          
                   <?php } ?>
                </div> -->
            </div>
        </div>
    </div>

</div><!-- end Container -->
<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>

<footer class="footer ang_footer">
    <?php include ANG_ROOT . "public/tpl/footer.php"?>
</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php"
?>



