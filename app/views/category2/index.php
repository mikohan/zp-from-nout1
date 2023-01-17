<!-- <?=p($data3)?> -->
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Подбор по каталогу. Категория <?=title(to_low($data2[0]['name']))?> Hyundai Porter. <?=$data3[0]['id']?></title>
        
        
		<meta name="description" content="Подобери запчасть для <?=title(to_low($data2[0]['name']))?> Портер по каталогу и получи её уже сегодня дешевле на 60% чем у официалов. Только Корейское качество! ☎ <?=TELEPHONE1?> <?=title(($data2[0]['id']))?><?=title(($data2[0]['id_h1']))?>">
        <meta name="keywords" content="Запчасти для Портер в категории <?=title($data2[0]['name'])?>, подбор по каталогу запчастей <?=title($data2[0]['name'])?> для Хундай Портер <?=title(($data2[0]['id']))?>">
        <meta name="robots" content="noindex">
	<!-- Second header -->	                                                                            
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
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a href="<?=ANG_HTTP?>/portercat2/" itemprop="url"><span itemprop="title">Каталог</span></a>
                            </li>
                            
                            <li  class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                  <a  itemprop="url" ></a><span itemprop="title"><?=title($data2[0]['name'])?></span>
                             </li>
                             
                        </ul>
                    </div>
                    
                            <div class="row text-center">
                                 <h1 class="main-h1" >Запчасти для Портер категория <?=title($data2[0]['name'])?> </h1>
                                 
                            </div>
							<div class="row">
								
								<?php foreach($data as $line) {;?>
							<div class="col-xs-6 col-sm-6 col-md-3">
								
								<a href="<?=ANG_HTTP?>/catalog2/<?=$line['id']?>/" class="thumbnail ang-name" data-toggle="tooltip" data-placement="top" data-original-title="Кликни по картинке категории">
								<img src="/public/img/p2<?= $line['img']?>" alt="<?= $line['name']?> Хендай Портер" title="<?= $line['name']?> Хендай Портер"> 

									<?php //print_r ($line); ?>
								<div class="caption ang-caption">
				                    <h5><?= $line['name']?></h5>
				                   <!--  <p>Thumbnail description…</p> -->
				                </div></a>
				                
							</div>
							<?php } ; ?>
							</div>
							<div class="row text-center">
							     <h2 class="main-h2" >Кликни по картинке подкатегории</h2>
							</div>
						</div>
				</div>
			</div><!-- end Container -->
			
			<footer class="footer ang_footer">
				<?php include ANG_ROOT . "public/tpl/footer.php"?>
			</footer>
			<?php include ANG_ROOT . "public/tpl/footer2.php"?>