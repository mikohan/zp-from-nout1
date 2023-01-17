<?php
require_once 'app/views/tpl/header.php';
?>

<div class="cotainer-fluid">
	<div class="row">
		<div class="col-md-2">
			<?php
            include 'app/views/tpl/left.php';
			?>
		</div>
		<div class="col-md-10">
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="#">Library</a>
				</li>
				<li class="active">
					Data
				</li>
			</ol>
			<div class="container-fluid">
				<IFRAME SRC="http://hyundaiporter.new/admin/getspeckom/parse_spec/" WIDTH=0 HEIGHT=0></IFRAME>
                <IFRAME SRC="http://hyundaiporter.new/admin/getspeckom/parse_spec_boxer/" WIDTH=0 HEIGHT=0></IFRAME>
                <IFRAME SRC="http://hyundaiporter.new/admin/getspeckom/parse_spec_transporter/" WIDTH=0 HEIGHT=0></IFRAME>
                <IFRAME SRC="http://hyundaiporter.new/admin/getspeckom/parse_spec_ducato/" WIDTH=0 HEIGHT=0></IFRAME> 
				
				


			</div>
		</div>
	</div>

</div>
<!-- conteiner-fluid -->
<?php
    require_once 'app/views/tpl/footer.php';
?>


