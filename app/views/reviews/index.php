
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Отзывы клиентов купивших запчасти Хендай Портер в компании ООО "Хендай Портер"</title>
        <meta name="description" content="Компания ООО Хендай Портер отзывы клиентов и сотрудников. Узнайтн подробнее по телефону ☎ <?=TELEPHONE1?>">
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
                                 <a itemprop="url"></a><span itemprop="title">Отзывы</span>
                            </li>
                        </ul>
                    </div>
                    
                  
                    <!-- <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>
                     -->
                     
                    <hr>
            <?php foreach ($data -> t as $review) { ?>
                    <div class="row">
                        
                            <div class="jumbotron">
                             <?php $star_e = 5 - $review[3];
                             $star = $review[3]; 
                             ?>
                            <?php for ($i=0; $i < $star; $i++) { ?>
                                <span class="glyphicon glyphicon-star"></span>
                            <?php } ?>
                            <?php for ($i=0; $i < $star_e; $i++) { ?>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            <?php } ?>
                         <p></p> <span class="label label-primary"><?=$review[1]?></span> </p>
                            <span class="pull-right"></span>
                            <p><?=$review[2]?></p>
                            </div>
                    </div>
                   
                    <?php } ?>
               
                      </div>
                </div>
                
            </div>
            </div><!-- end Container -->
            
            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>
        
        
</html>