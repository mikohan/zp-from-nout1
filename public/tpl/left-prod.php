
<?php

$dataset = left_bar();
//$dataset1 = left_bar_sub();
 //p_a($dataset);
$url = explode('/',$_SERVER['REQUEST_URI']);
//p_a($url);
if(!isset ($url[2]))
{
    $url[2] = '';
}
?>
             
<div  id="responsive-menu1">
<ul  class="nav nav-pills nav-stacked ang-nav-pills" >
    <?php foreach($dataset as $left) { ?>
    <li  role="presentation" class="<?php echo ($left['id'] == $url[2]) && ($url[1] == 'product') ? 'ang-active' : '';?> btn-primary">
        <a rel="nofollow" class="menu" href="<?=ANG_HTTP?>/product/<?=$left['id'] ?>/ "><span class="glyphicon glyphicon-play ang-play" aria-hidden="true"></span> <?=$left['ang_category']?></a>
    </li>
    
    <?php } ?>
</ul>
</div>
<div class="container-fluid hidden-xs hidden-sm">
<div class="row">
<div class="col-xs-12 text-center vk-left" >
<script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 89772385);
</script>
</div>
</div>
</div>