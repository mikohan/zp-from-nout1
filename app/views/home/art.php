<div class="col-md-6 col-xs-12">
    <div class="page-header header-main">
               <a href="/ladies/"> <h3 class="text-center">Статьи по ремонту Портера</h3></a> 
            </div> 
            <?php foreach($data6 as $lady) { ?>
                <a href="/ladies/girl/<?=$lady['id'] ?>"> 
	<div class="thumbnail main-lady">
		
			 <img class="img-responsive"  src="/public/img/timthumb.php?src=/public/img/articles/<?=$lady['face_img'] ?>&w=345" alt="<?=$lady['title'] ?>"> 
		
		<div class="caption main-lady">
			<h4 class="media-heading bg-primary fresh-lad"><?=$lady['title'] ?></h4>
			
			 
		</div>
	</div></a>
	 <?php } ?> 
</div>
<div class="col-md-6 col-xs-12">
    
<div class="page-header header-main">
               <a href="/articles/"> <h3 class="text-center">Интересное почитать</h3></a>
 </div> 
            
      <?php foreach($data2 as $art) { ?>       
     <div class="media">
       
        <div class="media-body">
           <a href="/articles/<?=$art['id'] ?>/"> <h4 class="media-heading bg-primary fresh-lad"><?=$art['title'] ?></h4>
            <span>
                <img class="media-object m-o" width="100" src="/public/img/timthumb.php?src=/public/img/articles/<?=$art['mini_img'] ?>&w=100" alt="<?=$art['title'] ?>">
                <?=strip_tags($art['description']) ?></span></a>
        </div>
    </div>
    <?php } ?>  
</div>       
            
           
           
            
            
            
            
            
            
            
            
            
            
            
            
            
           