<?php include ANG_ROOT . "public/tpl/header1.php"
?>
<title>Раздел для водителей Хендай Портер</title>
<meta name="description" content="Раздел призванный облегчить выбор автозапчастей Хендай Портер для женщин">
<meta name="keywords" content="запчасти Портер">
<!-- Second header -->
<?php include ANG_ROOT . "public/tpl/header2.php"
?>
<?php include ANG_ROOT . "public/tpl/header3.php"
?>
<div class="container">
	<div class="row">
		
		<div class=" col-md-12">
			<div class="ang-back">
				<ul class="breadcrumb">
					<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a href="/" itemprop="url"><span itemprop="title">Главная</span></a>
					</li>

					<li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
						<a itemprop="url"></a><span itemprop="title">Обзоры</span>
					</li>
				</ul>
			</div>
				<p>
					
				</p>
				<div class="row">
				   
				    <div class="col-md-6">
							<p class="bg-primary fresh-lad">
								Полезные вещи
							</p>
							<div class="col-md-8 col-lad">

								<div class="media">
										<a href="/ladies/girl/<?=$data[0]['id'] ?>/"> <img   class="media-object img-responsive" src="/public/img/articles/<?=$data[0]['face_img'] ?>" alt="<?=$data[0]['title'] ?>"> 
									<div class="media-body">
										<h4 class="media-heading bg-primary fresh-lad"><?=$data[0]['title'] ?></h4>
										
									</div></a>
								</div>

							</div>
							<div class="col-md-4 col-lad ">
								<div class="media">
                                        <a href="/ladies/girl/<?=$data[1]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[1]['face_img'] ?>" alt="<?=$data[1]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[1]['title'] ?></h4>
                                        <!-- <p><?=$data[1]['description']?></p> -->
                                    </div></a>
                                </div>
							</div>
							<div class="col-md-4 col-lad">
								<div class="media">
                                        <a href="/ladies/girl/<?=$data[2]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[2]['face_img'] ?>" alt="<?=$data[2]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[2]['title'] ?></h4>
                                        
                                    </div></a>
                                </div>
							</div><!-- end of first part -->
							<!-- second part of articles -->
							
                            <div class="col-md-8 col-lad">

                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[3]['id'] ?>/"> <img   class="media-object img-responsive" src="/public/img/articles/<?=$data[3]['face_img'] ?>" alt="<?=$data[3]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[3]['title'] ?></h4>
                                        
                                    </div></a>
                                </div>

                            </div>
                            <div class="col-md-4 col-lad ">
                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[4]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[4]['face_img'] ?>" alt="<?=$data[4]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[4]['title'] ?></h4>
                                        <!-- <p><?=$data[1]['description']?></p> -->
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lad">
                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[5]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[5]['face_img'] ?>" alt="<?=$data[5]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[5]['title'] ?></h4>
                                        
                                    </div></a>
                                </div>
                            </div><!-- end of second part -->
                            <div class="col-md-8 col-lad">

                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[6]['id'] ?>/"> <img   class="media-object img-responsive" src="/public/img/articles/<?=$data[6]['face_img'] ?>" alt="<?=$data[6]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[6]['title'] ?></h4>
                                        
                                    </div></a>
                                </div>

                            </div>
                            <div class="col-md-4 col-lad ">
                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[7]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[7]['face_img'] ?>" alt="<?=$data[7]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[7]['title'] ?></h4>
                                        <!-- <p><?=$data[1]['description']?></p> -->
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lad">
                                <div class="media">
                                        <a href="/ladies/girl/<?=$data[8]['id'] ?>/"> <img class="media-object img-responsive" src="/public/img/articles/<?=$data[8]['face_img'] ?>" alt="<?=$data[8]['title'] ?>"> 
                                    <div class="media-body">
                                        <h4 class="media-heading bg-primary fresh-lad"><?=$data[8]['title'] ?></h4>
                                        
                                    </div></a>
                                </div>
                            </div>

						</div>
						
                
                <div class="col-md-3">
                  <p class="bg-primary fresh-lad ">
                                Ещё статьи
                            </p>
                            <?php foreach ($data2 as $links) { ?>
                              <a href="/ladies/girl/<?=$links['id'] ?>/"><small> <i class="fa fa-circle-thin"></i> <?=$links['title'] ?></small></a><br />
                           <?php } ?>
                             
                    
                </div>
                
        <div class="col-md-3">
        <p class="bg-primary fresh-lad">
        Интересные факты
        </p>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-inner-lady" role="listbox">
            <div class="item active">
                <a href="/ladies/blonde/<?=$data3[0]['id'] ?>/"><img src="/public/img/articles/<?=$data3[0]['face_img'] ?>" alt="<?=$data3[0]['title'] ?>">
                    <div class="carousel-caption carousel-caption-lady">
                        <p class=" "><?=$data3[0]['title'] ?></p>
                    </div></a>
            </div>
            <div class="item">
                <a href="/ladies/blonde/<?=$data3[1]['id'] ?>/"><img src="/public/img/articles/<?=$data3[1]['face_img'] ?>" alt="<?=$data3[1]['title'] ?>">
            <div class="carousel-caption carousel-caption-lady">
                <p class=""><?=$data3[1]['title'] ?></p>
            </div></a>
            </div>
            <div class="item">
                <a href="/ladies/blonde/<?=$data3[2]['id'] ?>/"><img src="/public/img/articles/<?=$data3[2]['face_img'] ?>" alt="<?=$data3[2]['title'] ?>">
                    <div class="carousel-caption carousel-caption-lady">
                        <p class=""><?=$data3[2]['title'] ?></p>
                    </div></a>
            </div>
        </div>
    
 

  <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</div>

               <!--  //Second carousel -->
                <div class="col-md-3 col-xs-12 pull-right">
                    <div class="page-header header-main">
                         <a href="/ladies/"> <h3 class="text-center">Из раздела для Хендай Портер </h3></a>
                    </div> 
                     <?php foreach($data3 as $lady) { ?>
                 <a href="/ladies/blonde/<?=$lady['id']?>/"> 
                     <div class="thumbnail main-lady">
                        <img class="img-responsive"  src="/public/img/articles/<?=$lady['face_img'] ?>" alt="<?=$lady['title'] ?>">
                     <div class="caption main-lady">
                        <h4 class="media-heading bg-primary fresh-lad"><?=$lady['title'] ?></h4>
                     </div>
                    </div></a>
                         <?php } ?> 
                </div>
                <div class="col-md-3">
                  <p class="bg-primary fresh-lad ">
                                Ещё факты
                            </p>
                            <?php foreach ($data4 as $links) { ?>
                                <a href="/ladies/blonde/<?=$links['id'] ?>/"><small><i class="fa fa-female"></i> <?=$links['title'] ?></small></a><br />
                           <?php } ?>
                </div>
                </div>
            </div><!--  my first row -->
		</div>
</div><!-- end Container -->

<footer class="footer ang_footer">
	<?php include ANG_ROOT . "public/tpl/footer.php"
	?>
</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php"
?>