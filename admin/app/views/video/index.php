<?php
require_once 'app/views/tpl/header.php';
require_once 'app/lib/func.php';
//print_r($data2);
?>
<div class="cotainer">
	<div class="row">

		<ol class="breadcrumb">
			<li>
				<a href="/admin">Админка</a>
			</li>

			<li class="active">
				Видео товаров
			</li>
		</ol>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<ul class="nav-stacked">
					    <li role="presentation" >
                            <a href="/admin/videos/"><i class="fa fa-plus adm_green"></i> &nbsp;&nbsp;Добавить Видео к товару</a>
                        </li>
					    <?php foreach($data as $d) :  ?>
						<li   >
                            <a  class="a_text" onclick="if (! confirm('Точно удалить?')) return false;" href="/admin/videos/delete/<?=$d['id'] ?>/" data-toggle="tooltip" data-placement="left" title="Удалить видео" ><i class="fa fa-trash-o adm_red"></i> &nbsp;&nbsp;</a><a href="/admin/videos/<?=$d['id'] ?>/"> <?=$d['header'] . ' || ' . $d['part_id']?></a>
                        </li>
						<?php endforeach ; ?>
					</ul>
				</div>
				<div class="col-md-1">
				    </div>
				<div class="col-md-8">
					<div id="my_editor">
						<form method="post" id="apply-form" >
                            <label>Название видео</label>
                                <input id="angin" name="title" type="text" class="form-control field2" placeholder="Title" value="<?php if(isset($data2[0]['header'])) echo $data2[0]['header'];?>">

                            <label>Part ID</label>
                                <input id="angin5" name="part_id" type="text" class="form-control field2" placeholder="Product ID" value="<?php if(isset($data2[0]['part_id'])) echo $data2[0]['part_id'];?>">
                            <label>Ссылка</label>
                                <input type="text" name="link" class="form-control field2" placeholder="Ссылка" value="<?php if(isset($data2[0]['link'])) echo $data2[0]['link'];?>">
                                <input type="hidden" name="id" value="<?=@$data2[0]['id']?>">
                                <input type="hidden" name="action" value="save">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
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
