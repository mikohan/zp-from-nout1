<?php include ANG_ROOT . "public/tpl/header1.php"?>
		<title>Запчасти для Porter в категори <?=title(to_low($data2[0]['name']))?> <?=title($data2[0]['id'])?></title>
		<meta name="description" content="<?=title($data2[0]['name'])?> Задняя ось для Хендай Портер в наличии. Подбор по каталогу за 5 минут. На 60% дешевле, чем у официалов! ☎ <?=TELEPHONE1?> <?=title($data2[0]['id'])?>">
        <meta name="keywords" content="<?=title($data2[0]['name'])?> Хундай Портер, <?=title($data2[0]['name'])?> для Хендай Портер, <?=title($data2[0]['name'])?> Hyundai Porter, каталог запчастей hyundai porter">

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
                                <a href="<?=ANG_HTTP?>/category/<?=title($data2[0]['id_h2'])?>/" itemprop="url"><span itemprop="title"><?=title($data4[0]['name'])?></span></a>
                             </li>
                             <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a itemprop="url"></a><span itemprop="title"><?=title($data2[0]['name'])?></span>
                             </li>
                        </ul>
                    </div>

					<p  class="thumbnail ang-name">
						<img id="A" usemap="#map" src="/public/img<?= $data[0]['img']?>" alt="<?= $data2[0]['name']?> Хендай Портер" title="<?= $data2[0]['name']?> Хендай Портер" ></p>
							<map name="map"  id="map">
								<?php foreach($data3 as $line) {
								    if($line['1c_id'] == FALSE){
								        continue;
								    }

										if ($line['1c_id']!=$_POST['article']) {
											?>
												<area id="<?=$line['id']?>" class="blue"  shape="rect" coords="<?=$line['coords']?>" href="<?php echo 'https://' .  $_SERVER['HTTP_HOST'] . '/part/'. $line['1c_id'] . '/' . str2url($line['ang_name']);?>/" alt="<?=trim($line['ang_name']) . ' Хендай Портер'?>" data-toggle="tooltip" data-placement="right" data-original-title="<?=$line['ang_name']?>" >
										<?php }else{
											$coords=explode(',',$line['coords']);
											$coords_circle1=number_format(($coords[2] - $coords[0]) / 2 + $coords[0],0,'.','');
											$coords_circle2=number_format(($coords[3] - $coords[1]) / 2 + $coords[1],0,'.','');
											$coords_circle3=($coords[2] - $coords[0]) / 2;
											$coords_circle=$coords_circle1 . ',' . $coords_circle2 . ',' . $coords_circle3;

											$coords_pole1=number_format($coords[0]-($coords[2]-$coords[0])/4,0,'.','') . ',' . number_format(($coords[3] - $coords[1]) / 2 + $coords[1],0,'.','');
											$coords_pole2=number_format($coords[0]+($coords[2]-$coords[0])/4,0,'.','') . ',' . number_format($coords[1]-($coords[3] - $coords[1]) / 2,0,'.','');
											$coords_pole3=number_format($coords[0]+($coords[2]-$coords[0])/4*3,0,'.','') . ',' . number_format($coords[1]-($coords[3] - $coords[1]) / 2,0,'.','');;
											$coords_pole4=$coords[2]+($coords[2]-$coords[0])/4 . ',' . number_format(($coords[3] - $coords[1]) / 2 + $coords[1],0,'.','');
											$coords_pole5=number_format($coords[0]+($coords[2]-$coords[0])/4*3,0,'.','') . ',' . number_format($coords[3]+($coords[3] - $coords[1]) / 2,0,'.','');
											$coords_pole6=number_format($coords[0]+($coords[2]-$coords[0])/4,0,'.','') . ',' . number_format($coords[3]+($coords[3] - $coords[1]) / 2,0,'.','');
											$coords_pole=$coords_pole1 . ',' .$coords_pole2 . ',' .$coords_pole3 .',' . $coords_pole4 . ',' . $coords_pole5 . ',' . $coords_pole6;
											$line['coords']=$coords_pole;
										?>
										<area id="<?=$line['id']?>" class="blue"  shape="poly" coords="<?=$line['coords']?>" href="<?php echo 'https://' .  $_SERVER['HTTP_HOST'] . '/part/'. $line['1c_id'] . '/' . str2url($line['ang_name']);?>/" alt="<?=trim($line['ang_name']) . ' Хендай Портер'?>" data-toggle="tooltip" data-placement="right" data-original-title="<?=$line['ang_name']?>" >

						<?php }
								    ?>


							<?php } ; ?>
							</map>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9">
						    <div class="row text-center">
                                 <h1 class="main-h1" >Запчасти для Портер категория <?=title(to_low($data2[0]['name']))?> </h1>
                            </div>
                            <div class="row text-center">
                                 <h2 class="main-h2" >Кликните по названию, чтобы увидеть картинку.</h2>
                            </div>
                    <div class="ang_table">
                        <div class="ang_row ang_header ang_blue">
                            <div class="ang_cell ang_h">
                              Номер на картинке
                            </div>
                            <div class="ang_cell ang_h">
                                Наименование
                             </div>
                            <div class="ang_cell ang_h">
                              Цена
                            </div>
                            <div class="ang_cell ang_h">
                              Active
                            </div>
                     </div>

                 <?php  foreach ($data3 as $key => $line2) {
                           if($line2['1c_id'] == null){
                           continue;
                           }
													 if ($line2['1c_id']==$_POST['article']) {
														 $bg_color="background-color:rgba(61,224,75,0.5)";
													 }else{
														 $bg_color='';
													 }
                 ?>

                     <div class="ang_row" style="<?=$bg_color?>">
                        <div class="ang_cell">
                             <?=$line2['keyd']?>
                        </div>
                        <div class="ang_cell">
                            <a href="<?=ANG_HTTP?>/part/<?=$line2['1c_id']?>/<?=str2url($line2['ang_name'])?>/"><?=$line2['ang_name']?></a>
                        </div>
                        <div class="ang_cell">
                         <?=$line2['price']?> рублей
                        </div>
                        <div class="ang_cell">
                          Yes
                        </div>
                    </div>
                    <?php } ; ?>
                  </div>
                </div>

				</div>

			</div><!-- end Container -->
			<footer class="footer ang_footer">
				<?php include ANG_ROOT . "public/tpl/footer.php"?>
			</footer>
			<?php include ANG_ROOT . "public/tpl/footer2.php"?>
			<script type="text/javascript" src="/js/jquery.imagemapster.min.js"></script>
			<?php //p($data);?>
			<?php if($data[0]['id_h3'] == 2843): ?>
			    <?php ?>
			 <?php else : ?>
           <script type="text/javascript" src="/js/script.js"></script>
           <?php endif ?>
