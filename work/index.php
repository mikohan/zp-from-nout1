<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div class="container">
			<div class="row">
				<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h1>Site name</h1>
					<p>
						<a href="" class="btn btn-default">Button</a>
						<a href="" class="btn btn-primary">Button</a>
						<a href="" class="btn btn-success">Button</a>
						<a href="" class="btn btn-warning">Button</a>
						<a href="" class="btn btn-info">Button</a>
						<a href="" class="btn btn-danger">Button</a>
					</p>

					<div class="btn-group">
						<a href="" class="btn btn-danger"><i class="fa fa-spinner"></i></a>
						<a href="" class="btn btn-primary"><i class="fa fa-file"></i></a>
						<a href="" class="btn btn-success"><i class="fa fa-download"></i></a>
					</div>

				</div>
			</div>
		</div>
		


<form class="navbar-form navbar-left" role="search">
	<div class="form-group">
		<input type="text" class="form-control"  placeholder="ПОИСК">
	</div>
	<button type="submit" class="btn btn-success">
		ПОИСК
	</button>
</form>



					<div class="bs-example bs-example-bg-classes" data-example-id="contextual-backgrounds-helpers">
						<?php foreach ($data as $line) : ?>					
  						 <p class="bg-primary"><?=$line['name'] ?></p>
    					<?php endforeach; ?>
  					</div>
  					
<!-- meny green -->


<div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 3</a>
    <div class="collapse" id="demo3">
      <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down"></i></a>
      <div class="collapse list-group-submenu" id="SubMenu1">
        <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
        <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
        <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Subitem 3 c <i class="fa fa-caret-down"></i></a>
        <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
          <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 1</a>
          <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 2</a>
        </div>
        <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
      </div>
      <a href="javascript:;" class="list-group-item">Subitem 2</a>
      <a href="javascript:;" class="list-group-item">Subitem 3</a>
    </div>
    <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 4</a>
    <div class="collapse" id="demo4">
      <a href="" class="list-group-item">Subitem 1</a>
      <a href="" class="list-group-item">Subitem 2</a>
      <a href="" class="list-group-item">Subitem 3</a>
    </div>
  </div>
</div>


<!-- img big -->
<img src="/public/img/others/sol.png" class="img-responsive center-block" alt="Responsive image">



			<!-- video embed -->		
						
					
					<!-- <div class="panel panel-warning">
						<div class="panel-heading hiden-xs">
							<p class="panel-title">Моё видео</p>						
					</div>panel-heading
					<div class="panel-body">
						<div class="embed-responsive embed-responsive-16by9 hidden-xs">
							<iframe class="embed-responsive-item" width="560" height="315" src="http://www.youtube.com/embed/H0shTeUxUlI?list=PLypd1VrGv7FPokhw3f5pwBQTHsU9T2mBq" allowfullscreen></iframe>
						</div>
						</div>panel-body
					</div> --><!-- panel warning -->
						
						
						
<?php echo $_SERVER['REQUEST_URI']?>

