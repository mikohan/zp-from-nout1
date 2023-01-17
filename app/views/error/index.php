<?php
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
?>
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Страница 404 Хендай Портер и другие запчасти на складе компании ООО "Хендай Портер".</title>
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
                                 <a itemprop="url"></a><span itemprop="title">Страница не найдена</span>
                            </li>
                        </ul>
                    </div>
                    <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="error-template">
							<h1> Oops!</h1>
							<h2> 404 Страница не найдена!</h2>
							<div class="error-details">
								Sorry, an error has occured, Requested page not found!
							</div>
							<div class="error-actions">
							    <a href="javascript:history.back(1)" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span> Назад </a>
								<a href="<?=ANG_HTTP?>/" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span> На главную </a><a href="<?=ANG_HTTP?>/contacts/" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Контакты </a>
							</div>
						</div>
					</div>
				</div>
			</div>
                </div> 
         
                        </div>
              
            </div><!-- end Container -->
            
            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>