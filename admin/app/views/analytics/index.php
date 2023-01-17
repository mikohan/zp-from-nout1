<?php
require_once 'app/views/tpl/header.php';

?>

<div class="cotainer-fluid">
	<div class="row">
		<div class="col-md-0">
			<?php
		           //require_once 'app/views/tpl/left.php';
			?>
		</div> 
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li>
					<a href="/admin">Админка</a>
				</li>
				
				<li class="active">
					Анализ
				</li>
			</ol>
			<div class="container-fluid">
				<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                <form class="well" method="post" action = "<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <div class="input-group">
                        <input name="sr" type="text" class="form-control input-lg" id="pwd" placeholder="Поиск по номеру, названию ..." value="<?=$data ?>">
                        <span class="input-group-btn">
                            <button  type="button submit" class="btn btn-primary input-lg">
                                ПОИСК
                            </button> </span>
                    </div>
                    <!-- <span class="help-block">Введите номер запчасти или название...</span> -->
                </form>
                </div>
            </div><!-- end row -->
				<div class="row">
            <div class="col-md-12">
                <table  class="table table-bordered">
                    <thead>
                        <tr class="head">
                            <?php foreach ($data3 as $th){?>
                           <th><?=$th?></th>
                           <?php }?>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $m = 1; ?>
                        <?php foreach($data2 as $k => $tr){?>
                        <tr>
                            <?php
                            $m++;
                            //$c -> p($tr);
                            $count = count($tr);
                            
                            if (($tr[1] > $tr[2] AND $tr[2] != '') OR ($tr[1] > $tr[3] AND $tr[3] != '')) {
                                $class = 'red';
                            } else {
                                $class = 'green';
                            }

                            for ($i = 0; $i < $count; $i++) {

                                echo '<td class="' . $class . '">' . $tr[$i] . '</td>';
                            }
                            ?>
                            
                        </tr>
                        <?php } ?>
                        <button class="btn btn-primary" type="button">
                             Строк <span class="badge"><?=$m ?></span>
                        </button>
                        
                      
                    </tbody>
                </table>
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

