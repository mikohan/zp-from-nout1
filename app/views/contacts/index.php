
<?php include ANG_ROOT . "public/tpl/header1.php"?>
<title>ООО "Хендай Портер" - контакты компании | ☎ <?=TELEPHONE1?>!</title>
<meta name="description" content="Контакты компании по продаже запчастей на Хундай Портер в Москве. Задай любые вопросы по телефону ☎ <?=TELEPHONE1?>">
<meta name="keywords" content="интернет магазин запчасти Портер">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
						<a itemprop="url"></a><span itemprop="title">Контакты</span>
					</li>
				</ul>
			</div>

			<!-- <style media="screen">
				.banner_top_contacts{

					 display: flex;
					 width: 100%;
					 justify-content: center;
					 align-items: center;
				}
				.title_banner_contacts{
					color:#30b017;
					font-size: 20px;
				}
				.text_banner_contacts{
					color:#6b6b6b;
					line-height: 120%;
					font-size: 15px;
				}
				.banner_content_contacts{
					max-height: 200px;

				}
				@media screen and (max-device-width: 767px){
					.title_banner_contacts{
						color:#30b017;
						font-size: 16px;
					}
					.text_banner_contacts{
						color:#6b6b6b;
						line-height: 120%;
						font-size: 14px;
					}
					.banner_content_contacts{
						max-height: 200px;

					}
				}
			</style> -->

			<!--
			<div>
								<img class="img-responsive" src="/public/img/others/may2018long.jpg" alt="Расписание работы в майские праздники" />


							</div>-->

			<div class="vcard panel panel-primary">

				<div class="  panel-heading">
					<h1 class="category panel-title">Магазин авто запчастей на Портер контакты</h1>
					<span class="fn org"><strong>OOO "Хендай Портер"</strong></span>
				</div>

				<div class="panel-body cont">
                    <a href="/about/"><h2>Прочитайте о нашей компании здесь</h2></a>
					<h3>Позвоните</h3>

					<p>
						<strong>и мы ответим на любые вопросы по телефону: <?=TELEPHONE_OLD?></strong>
					</p>
					<br>
					<div class="row">
					    <div class="col-md-6 col-xs-12">
					<p>
						Вы можете заказать <a href="/delivery/">бесплатную доставку</a>
					</p>
					<p>
						Или купить запчасти по адресу:
					</p>
					<address class="adr">
						<span class="locality">г. Москва</span>

						<br>
						<span class="street-address">Соловьиная Роща д.8 корпус 2 офис 7</span>

						<br>
						<span class="tel"><abbr title="Phone">tel:</abbr> <a class="tel" href="tel:<?=TELEPHONE_OLD_LINK?>"><?=TELEPHONE_OLD?></a></span>
						<br>
						<!--<span class="tel"><abbr title="Phone">tel:</abbr> <a class="tel" href="tel:<?=TELEPHONE_ZADARMA_LINK?>"><?=TELEPHONE_ZADARMA?></a></span>-->

					</address>


					<address>
						<strong>Ответим на любые Ваши вопросы по Email</strong>
						<br>
						<a href="mailto:zapchastiporter@gmail.com">zapchastiporter@gmail.com</a>
						<p>Отправляя емайл, Вы соглашаетесь с <a href="/policy/">политикой конфиденциальности</a></p>
						<div>
							Мы работаем <span class="workhours">ежедневно Без Выходных с <?=WORK_FROM_DAYS?> до <?=WORK_TO_DAYS?></span><br />

							<span class="url"> <span class="value-title" title="https://zapchastiporter.ru/"> </span> </span>
						</div>


					</address>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">
                             <iframe width="560" height="315" src="https://www.youtube.com/embed/g427kautZEw" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    </div>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Наш адрес: ул. Соловьиная Роща д.8 к.2 офис 7  на карте Гугл</h3>
				</div>
				<div class="panel-body">
					<div id="map-canvas"></div>
				</div>
			</div>
		</div>
	</div>

</div><!-- end Container -->

<footer class="footer ang_footer">
	<?php include ANG_ROOT . "public/tpl/footer.php"?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?=GOOGLE_API_KEY?>"></script>
<script type="text/javascript" src="/public/js/googlemap.js"></script>
</footer>
<?php include ANG_ROOT . "public/tpl/footer2.php"?>
<!-- Google Code for Contacts Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1067276604;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "t1OsCIKPl10QvLL1_AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;"
 alt="goole api services" title="Google api services" src="//www.googleadservices.com/pagead/conversion/1067276604/?label=t1OsCIKPl10QvLL1_AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
