<?php
//p($data);
?>
<?php include ANG_ROOT . "public/tpl/header1.php"?>
<title>Статьи о Хундай Портере </title>
<meta name="description" content="Категория статей для Хендай Портер">
<meta name="keywords" content="Запчасти Портер">
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
			<div class="ang-back">
				<ul class="breadcrumb">
					<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
					</li>

					<li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a itemprop="url"></a><span itemprop="title">Статьи о Портере</span>
					</li>
				</ul>
			</div>
			<div class="row">
			    <?php foreach($data as $a) { ?>
				<div class="col-sm-12 col-md-12">
				    <div class="panel panel-default">
					   <div class="panel-body">

					    <div class="col-md-3">
					        <?php if(file_exists(ANG_ROOT . '/public/img/articles/' . $a['mini_img'])) {?>
						           width="100" src="https://<?=$_SERVER['HTTP_HOST'] . '/public/img/articles/' . $a['mini_img']?>"
								  alt="<?=$a['title']?>" title="<?=$a['title']?>">
						    <?php }?>
						</div>
						<div class="col-md-9">
						   <a href="/articles/<?=$a['id']?>/" class="a-text" ><h3 class="art-caption"><?=$a['title']?></h3></a>
						    </div>



								<?=$a['description']?>
							</p>
							<div class="row">
							<div class="col-md-10">
							<p>
								<a href="/articles/<?=$a['id']?>/" class="btn btn-primary" role="button">Читать дальше ...</a>
							</p>
							</div>
							<div class="col-md-2">
							    <i class="fa fa-eye"></i> <span class="badge"><?=$a['view']?></span>
							</div>
							</div>

							<div class="row art-author pull-right">
                <?php if($a['author']) { ; ?>
                <small>Автор: <?=$a['author']?></small>
                <?php } ?>
                </div>
						</div>
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
<?php include ANG_ROOT . "public/tpl/footer2.php"
?>
