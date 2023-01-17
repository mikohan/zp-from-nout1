<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Админка</title>

        <!-- Bootstrap -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/admin/css/style.css" rel="stylesheet">
        <link href="/admin/css/font-awesome.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/admin">Админка Ангара</a>
                    <a class="navbar-brand" href="/">Сайт Ангара</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li >
                            <a href="/admin/getprice/">Получить цены конк. </a>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Наш прайс <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#"><i class="fa fa-car"></i> &nbsp;&nbsp;Обновить наш прайс </a>
                                </li>

                                <!-- <li class="divider"></li>
                                <li>
                                <a href="#">Separated link</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                <a href="#">One more separated link</a>
                                </li> -->
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Анализ конкурента <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/admin/analytics/angtotzel/"><i class="fa fa-truck"></i> Ангара - Тоталдизель - Железяка</a>
                                </li>
                                <li>
                                    <a href="/admin/analytics/getmit/"><i class="fa fa-car"></i> Ангара - Митино</a>
                                </li>
                                <li>
                                    <a href="/admin/getspeckom/"><i class="fa fa-trash"></i> &nbsp;Speckom</a>
                                </li>
                                <!-- <li class="divider"></li>
                                <li>
                                <a href="#">Separated link</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                <a href="#">One more separated link</a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Работа с контентом <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/admin/ckeditor/"><i class="fa fa-book"></i> &nbsp;&nbsp;Статьи</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/news/"><i class="fa fa-newspaper-o"></i> &nbsp;&nbsp;Описание товара</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/news/mainpage/"><i class="fa fa-bomb"></i> &nbsp;&nbsp;Текст на главной</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/textcategory/"><i class="fa fa-th-list"></i> &nbsp;&nbsp;Текст категорий</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/subcategory/"><i class="fa fa-th-list"></i> &nbsp;&nbsp;Текст подкатегорий</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/videos/"><i class="fa fa-th-list"></i> &nbsp;&nbsp;Добавить видео к товару</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/blondy/"><i class="fa fa-th-list"></i> &nbsp;&nbsp;Доп.мат на Портер</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/admin/elfinder/elfinder.html"><i class="fa fa-th-list"></i> &nbsp;&nbsp;Работа с картинками</a>
                                </li>

                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">
                                Поиск
                            </button>
                        </form>
                        <li>

                            <a href="#">Выйти</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
