
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Видео об автомобиле его ремонте а так же о запчастях Хендай Портер</title>
        <meta name="description" content="Подборка интересного видео о Хендай Портер">
        <meta name="keywords" content="Видео Портер, видео хендай Портер">
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
                                 <a itemprop="url"></a><span itemprop="title">Видео</span>
                            </li>
                        </ul>
                    </div>
               	    <?php foreach($data->d as $line) { ?>
               	    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Видео о Хендай Портер</h3>
                        </div>
			                 <div  class="embed-responsive embed-responsive-16by9">
				                    <video controls class="embed-responsive-item">
					                    <!-- <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4> -->
					                       <source src=/public/vids/<?=$line?> type=video/mp4>
				                     </video>
			                 </div>
			                 </div>
			                 <?php } ?>
		              </div>
                </div>


            </div><!-- end Container -->

            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>
