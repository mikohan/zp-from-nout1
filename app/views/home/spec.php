<?php //p($data7)?>

<?php foreach($data7 as $present) {?>
<div class="col-sm-6 col-md-3">
	<div class="thumbnail">
		<a href="/stock/"><img src="/public/img/timthumb.php?src=/public/img/spec/<?=$present['img']?>&w=179" alt="<?=$present['name']?>"></a>
		<div class="caption-white">
			<h3 class="text-center">Подарок!</h3>
			<p>
				<?=red_text($present['spec'])?>
			</p>
			<p>
				<!-- <a href="#" class="btn btn-primary" role="button">Button</a><a href="#" class="btn btn-default" role="button">Button</a> -->
			</p>
		</div>
	</div>

</div>
<?php } ?>