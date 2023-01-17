
<?php include ANG_ROOT . "public/tpl/header1.php"?>
        <title>Фотографии Хендай Портер .㉮ Отдохни от работы, посмотри каринки </title>
        <meta name="description" content="Картинки и фото запчастей на Хундай Портер в Москве. Задай любые вопросы по телефону ☎ <?=TELEPHONE1?>">
        <meta name="keywords" content="запчасти портер">
    <!-- Second header -->  
        <?php include ANG_ROOT . "public/tpl/header2.php"?>
        <?php include ANG_ROOT . "public/tpl/header3.php"?>
        <div class="container">
            <div class="ang-back">
                        <ul class="breadcrumb">
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a href="<?=ANG_HTTP?>/" itemprop="url"><span itemprop="title">Главная</span></a>
                            </li>
                             <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                                 <a itemprop="url"></a><span itemprop="title">Галерея</span>
                            </li>
                        </ul>
                    </div>
            
             <ul class="row my-gallery">
                 
                 <?php foreach ($data as $d) {?>
                  <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"><img src="/public/img/gallery/<?=$d ?>" alt="Галерея - <?=$d?>" title="Галерея - <?=$d?>" /></li>
                  <?php } ?>
             </ul>

             <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">         
                     <div class="modal-body">                
                     </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->   
            
            </div><!-- end Container -->
            
            <footer class="footer ang_footer">
                <?php include ANG_ROOT . "public/tpl/footer.php"?>
            </footer>
            <?php include ANG_ROOT . "public/tpl/footer2.php"?>
            
               <script>
                          $(document).ready(function(){
                          $('li img').on('click',function(){
                          var src = $(this).attr('src');
                          var img = '<img src="' + src + '" class="img-responsive" alt="Footer image" title="Footer image"/>';
                          $('#myModal').modal();
                          $('#myModal').on('shown.bs.modal', function(){
                                $('#myModal .modal-body').html(img);
                            });
                            $('#myModal').on('hidden.bs.modal', function(){
                            $('#myModal .modal-body').html('');
                                });
                            });  
                        })
               </script>