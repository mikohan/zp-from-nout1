<?php
require_once 'app/views/tpl/header.php';
//$p = new ModNews;
//$p -> p($data);
?>



<div class="cotainer">
	<div class="row">

		<ol class="breadcrumb">
			<li>
				<a href="/admin">Админка</a>
			</li>

			<li class="active">
				Тексты категорий
			</li>
		</ol>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav-stacked">
					   <?php $url = explode('/',$_SERVER['REQUEST_URI']);   ?>
					    <?php foreach($data2 as $d) :  ?>
					        <?php  if($d[0] == $url[3]){$cl = 'act';}else{ $cl = 'fuck';} ?>
						<li   >
							<a class="<?=$cl?>" href="/admin/textcategory/<?=$d[0] ?>/"><i class="fa fa-check"></i></i>&nbsp;&nbsp; <?=$d[1] ?></a>
						</li>
						<?php endforeach ; ?>
						
						
					</ul>
				</div>
				<div class="col-md-1">
				    
				    
                        
				    </div>

				<div class="col-md-8">
					<div id="my_editor">
						<form method="post" id="apply-form">
						    <label>Meta Title</label>
			                 <input id="angin" name="meta_t" type="text" class="form-control field2" placeholder="Title" value="<?php if(isset($data[0][3])) echo $data[0][3];?>">
                            <label>Meta-description</label>
                            <input id="angin" name="meta_d" type="text" class="form-control field2" placeholder="Meta-Description" value="<?php if(isset($data[0][4])) echo $data[0][4];?>">
                            <label>Meta-Keywords</label>
                            <input id="angin" name="meta_k" type="text" class="form-control field2" placeholder="Meta-Keywords" value="<?php if(isset($data[0][5])) echo $data[0][5];?>">
						   
						    <label><?php if($data){echo $data[0][4]; }?></label>
							<textarea  class="text_area" name="editor1" id="editor1" rows="10" cols="80">
                
                <?php if($data){echo $data[0][1];}?>
            </textarea>	
						</form>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>
<!-- conteiner-fluid -->
<?php
require_once 'app/views/tpl/footer.php';
?>
<script src="/admin/app/views/ckeditor/ckeditor.js"></script>
<script>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor');
	//config.height = '500px';

</script>
<script>
	function myFunction() {
    if (confirm("Точно удалить?!"))
    {
       window.location = "/admin/news/deleteart/<?=$d[0] ?>/";
    }
    else {
        
    }
}
</script>

