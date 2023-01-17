<?php include ANG_ROOT . "public/tpl/header1.php" ?>
<title><?= $data2[0][5] ?></title>
<meta name="description" content="<?= $data2[0][6] ?>">
<meta name="keywords"
	content="Запчасти <?= title($data2[0][1]) ?> Хендай Портер, запчасти <?= title($data2[0][1]) ?> Hyundai Porter">
<!-- Second header -->
<?php include ANG_ROOT . "public/tpl/header2.php" ?>
<?php include ANG_ROOT . "public/tpl/header3.php" ?>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<!-- Left bar -->
			<?php include_once ANG_ROOT . "public/tpl/leftbar.php" ?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-9">
			<div class="ang-back">
				<ul class="breadcrumb">
					<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
					</li>
					<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active">
						<a itemprop="url"><span itemprop="title"><?= title($data2[0][1]) ?></span></a>
					</li>
				</ul>
			</div>

			<?php // var_dump($data2); ?>
			<div class="row">
				<div class="row text-center">
					<h1 class="main-h1"><?= $data2[0][4] ?></h1>
				</div>
				<?php foreach ($data as $key => $line) {
	                     ; ?>

				<?php //print_r ($line); ?>
				<div class="col-xs-6 col-md-3">
					<a href="/porterparts/<?= $line[0] ?>/<?= str2url($line[1]) ?>-porter/" class="thumbnail  ang-name"
						data-toggle="tooltip" data-placement="top" data-original-title="Узнать больше..."> <img
							src="/public/img/timthumb.php?src=/public/img/category/<?= $line[0] ?>.jpg&w=179"
							alt="<?= $line[1] ?>" title="<?= $line[1] ?>">
						<div class="caption ang-caption">
							<h3><?= $line[1] ?></h3>
						</div>
					</a>
				</div>

				<?php }
                     ; ?>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php if (isset($data3[0])): ?>
					<div class="row text-center">
						<h2 class="main-h2">Описание категории <?= $data2[0][1] ?> для Хундай Портер</h2>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<?= $data3[0]['text']; ?>
						</div>
					</div>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- end Container -->
<footer class="footer ang_footer">
	<?php include ANG_ROOT . "public/tpl/footer.php" ?>
</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php" ?>