
<?php include ANG_ROOT . "public/tpl/header1.php"?>
<title>Купить Запчасти на Портер 1 и Портер 2 в интернет магазине в Москве</title>
<meta name="description" content="Купить запчасти для Портер 1 и Портер 2 в интернет магазине в Москве. ★ Бесплатно отправим в регионы ★  Задайте любые вопросы по  ☎ <?=TELEPHONE1?>">
        <meta name="keywords" content="запчасти Хендай Портер, запчасти Хундай Портер, запчасти Hyundai Porter, запчасти Хундай Портер отправка в регионы ">
<?php include ANG_ROOT . "public/tpl/header2.php"?>
<?php include ANG_ROOT . "public/tpl/carousel.php"?>
<?php include ANG_ROOT . "public/tpl/header3.php"?>

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<?php include ANG_ROOT . "public/tpl/leftbar.php"
			?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 ">
			<div class="ang-back">
				<ul class="breadcrumb">
					<li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="/" itemprop="url"></a><span itemprop="title">Главная</span>
					</li>
				</ul>
			</div>

			<div class="row">
			    <div class="col-sm-12">

                <div class="well well-sm main-well">
                    <h1 class="text-center main-h1">Купить запчасти для Хендай Портер 1 и Портер 2 в Москве с доставкой.</h1>

                </div>
                <div class="row hidden-xs">
                    <!--Здесь находится страница подарков-->
                     <?php //include ANG_ROOT . "app/views/home/spec.php"?>
                </div>
                <?php foreach ($data5 as $spec) { ?>
                        <div class="col-xs-6 col-sm-6 col-md-3">
                    <a href="/part/<?=$spec['1c_id'] . '/' . str2url($spec['ang_name']) ?>/" class="thumbnail  ang-name" data-toggle="tooltip" data-placement="top" data-original-title="Спецпредложение"> <img src="/public/img/timthumb.php?src=/public/img/parts/<?php echo( get_image($spec['1c_id'])); ?>&w=172" alt="Расxодники Портер">
                    <div class="caption ang-caption">
                        <h5><?=cutter($spec['ang_name']) ?></h5>
                         <h5>Цена: <?=$spec['price'] ?> рублей</h5>

                    </div> </a>
                </div>
                <?php } ?>
            </div>
            </div>
		</div>
	</div>
	<div class="row">

		<div class="col-md-4 col-xs-12">

			 <p class="bg-primary fresh-lad">
                Новое поступление товаров
             </p>

             <div class="row part-news">
                 <div class="col-xs-12">
                            <div class="col-md-8 col-lad">

                                <div class="media main-prod-height">
                                        <a href="/part/<?=$data3[0]['author'] . '/' .str2url($data3[0]['ang_name']) ?>/"> <img   class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[0]['author']) ?>&w=237" alt="<?=$data3[0]['ang_name'] ?>">
                                    <div class="media-body">
                                        <h5 class="media-heading bg-primary fresh-lad"><b><?=$data3[0]['ang_name']?></b></h5>

                                    </div></a>
                                </div>

                            </div>
                            <div class="col-md-4 col-lad ">
                                <div class="media">
                                        <a href="/part/<?=$data3[1]['author'] . '/' .str2url($data3[1]['ang_name']) ?>/"> <img class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[1]['author']) ?>&w=117" alt="<?=$data3[1]['ang_name'] ?>">
                                    <div class="media-body">
                                        <h6 class="media-heading bg-primary fresh-lad"><b><?=$data3[1]['ang_name'] ?></b></h6>
                                        <!-- <p><?=$data[1]['description']?></p> -->
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lad">
                                <div class="media">
                                        <a href="/part/<?=$data3[2]['author'] . '/' .str2url($data3[2]['ang_name']) ?>/"> <img class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[2]['author']) ?>&w=117" alt="<?=$data3[2]['ang_name'] ?>">
                                    <div class="media-body">
                                       <h6 class="media-heading bg-primary fresh-lad"><b><?=$data3[2]['ang_name'] ?></b></h6>

                                    </div></a>
                                </div>
                            </div>
                            </div>
                          </div>
                            <!-- Вторая часть от товаров на главной -->
                            <div class="row">
                                <div class="col-xs-12">

                             <div class="col-md-8 col-lad">

                                <div class="media main-prod-height">
                                        <a href="/part/<?=$data3[3]['author'] . '/' .str2url($data3[3]['ang_name']) ?>/"> <img   class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[3]['author']) ?>&w=237" alt="<?=$data3[0]['ang_name'] ?>">
                                    <div class="media-body">
                                        <h5 class="media-heading bg-primary fresh-lad"><b><?=$data3[3]['ang_name'] ?></b></h5>

                                    </div></a>
                                </div>

                            </div>
                            <div class="col-md-4 col-lad ">
                                <div class="media">
                                        <a href="/part/<?=$data3[4]['author'] . '/' .str2url($data3[4]['ang_name']) ?>/"> <img class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[4]['author']) ?>&w=117" alt="<?=$data3[4]['ang_name'] ?>">
                                    <div class="media-body">
                                        <h6 class="media-heading bg-primary fresh-lad"><b><?=$data3[4]['ang_name'] ?></b></h6>
                                        <!-- <p><?=$data[1]['description']?></p> -->
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lad">
                                <div class="media">
                                        <a href="/part/<?=$data3[5]['author'] . '/' .str2url($data3[5]['ang_name']) ?>/"> <img class="media-object img-responsive" src="/public/img/timthumb.php?src=/public/img/parts/<?=get_image($data3[5]['author']) ?>&w=117" alt="<?=$data3[5]['ang_name'] ?>">
                                    <div class="media-body">
                                       <h6 class="media-heading bg-primary fresh-lad"><b><?=$data3[5]['ang_name'] ?></b></h6>

                                    </div></a>
                                </div>
                            </div>
                         </div>
                </div>


		</div><!-- Новости общий col -->
		<div class="col-md-8 col-xs-12">
			<?php include ANG_ROOT . "app/views/home/art.php"?>
		</div>

	</div>
	<div class="row">
	   <div class="col-md-12">
		<div class="panel panel-default main-bottom">
			<div class="panel-body">

				<?=$data4[0][0] ?>
			</div>
            </div>
		</div>
	</div>


</div><!-- end Container -->

<footer class="footer ang_footer">
	<?php include ANG_ROOT . "public/tpl/footer.php"?>
</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php"
?>
<!--This part of code must be enabled in off days and enabled in working days-->
<!-- Modal starts -->
                        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Режим работы в праздничные дни</h4>
                              </div>
                              <div class="modal-body">
                                <h3><b>Работаем</b> в праздничные дни 6, 7, 8 марта с 10 утра до 17 вечера</h3>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Все понятно, закрыть окно</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                                 Modal ends

                        <script type="text/javascript" src="/js/cookie.js"></script>
                        <script>
                            if (!Cookies.get('popup')) {
                                setTimeout(function() {
                                    $('#myModal').modal();
                                }, 600);
                            }
                            $('#myModal').on('shown.bs.modal', function () {
                                // bootstrap modal callback function
                                // set cookie
                                Cookies.set('popup', 'valid', { expires: 1, path: "/" }); // need to set the path to fix a FF bug
                            })
                        </script> -->
