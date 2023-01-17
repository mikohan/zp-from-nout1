<?php
require_once 'app/views/tpl/header.php';
$p = new ModSubcategory;
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
					    
					     <?php $url = explode('/', $_SERVER['REQUEST_URI']); ?>
					                             
					    <?php foreach($data2 as $d) :  ?>
					    <?php
                            if ($d[0] == $url[3]) {$cl = 'act';
                            } else { $cl = 'fuck';
                            }
 ?>
						<li   >
							<a class="<?=$cl ?>" href="/admin/subcategory/<?=$d[0] ?>/"><i class="fa fa-check"></i></i>&nbsp;&nbsp; <?=$d[0] ?>&nbsp;&nbsp;<?=$d[1] ?></a>
						</li>
						<?php endforeach ; ?>
					</ul>
				</div>
				<div class="col-md-1">
				    </div>
				<div class="col-md-8">
					<div id="my_editor">
						<form method="post" id="apply-form">
						    <label for="exampleInputEmail1">title</label>
						    <input id="angin" name="meta_t" type="text" class="form-control field2" placeholder="Title" value="<?php if(isset($data[0][3])) echo $data[0][3];?>">
                            <label for="exampleInputEmail1">description</label>
                            <input id="angin" name="meta_d" type="text" class="form-control field2" placeholder="Description" value="<?php if(isset($data[0][4])) echo $data[0][4];?>">
                            <label for="exampleInputEmail1">keywords</label>
                            <input id="angin" name="meta_k" type="text" class="form-control field2" placeholder="Keywords" value="<?php if(isset($data[0][5])) echo $data[0][5];?>">
                            <label for="exampleInputEmail1">h1</label>
                            <input id="angin" name="h1" type="text" class="form-control field2" placeholder="h1" value="<?php if(isset($data[0][6])) echo $data[0][6];?>">
                            <label for="exampleInputEmail1">img</label>
                            <input id="angin" name="img" type="text" class="form-control field2" placeholder="Image" value="<?php if(isset($data[0][7])) echo $data[0][7];?>">
						    <label><?php
                            if ($data) {echo $data[0][7];
                            }
                        ?></label>
							<textarea  class="text_area" name="editor1" id="editor1" rows="10" cols="80">
                <?php
                                if ($data) {echo $data[0][1];
                                }
                            ?>
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

</script>



