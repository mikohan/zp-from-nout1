<?php
require_once 'app/views/tpl/header.php';
$p = new ModNews;
//$p -> p($data2);
?>



<div class="cotainer">
	<div class="row">

		<ol class="breadcrumb">
			<li>
				<a href="/admin">Админка</a>
			</li>

			<li class="active">
				Редактирование новостей
			</li>
		</ol>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav-stacked">
					    <li role="presentation" >
                            <a href="/admin/news/mainpage/"><i class="fa fa-plus"></i> &nbsp;&nbsp;Редактировать текст на главной</a>
                        </li>
					    
						<!-- <li   >
							<a onclick="if (! confirm('Точно удалить?')) return false;" href="/admin/news/deleteart/<?=$d[0] ?>/" data-toggle="tooltip" data-placement="left" title="Удалить статью" ><i class="fa fa-trash-o"></i>&nbsp;&nbsp; </a><a href="/admin/news/<?=$d[0] ?>/"> <?=$d[5] ?></a>
						</li> -->
						
						
						
					</ul>
				</div>
				<div class="col-md-1">
				    
				    
                        
				    </div>

				<div class="col-md-8">
					<div id="my_editor">
						<form method="post" id="apply-form">
						    
						    
						    <!-- <input id="angin" name="meta_d" type="text" class="form-control field2" placeholder="Description" value="<?php if(isset($data[0][1])) echo $data[0][1];?>"> -->
						   
						    <label>Текст на главной</label>
							<textarea  class="text_area" name="editor1" id="editor1" rows="10" cols="80">
                
                <?php if(isset($data2[0][0])){echo $data2[0][0];}?>
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


