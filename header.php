<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Народная Кооперация</title>

        <!-- Bootstrap -->
        <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css?v=<?=time();?>">
        <link rel="stylesheet" type="text/css" href="./assets/css/media.css?v=<?=time();?>">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- <div class="container"> -->
            <!-- <div class="top-banner"></div> -->

            <nav class="navbar navbar-default navbar-fixed-top koop-navbar">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">
                    <img class="admin-top-logo" alt="Лого" src="./assets/images/favicon-32x32.png">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- search -->
                    <form class="navbar-form navbar-left">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Поиск...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                      </span>
                    </div><!-- /input-group -->
                  </form>
                  <!-- /search -->
                  <!-- top menu -->
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">О НАС <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Договор</a></li>
                        <li><a href="#">Наши партнеры</a></li>
                        <li><a href="#">Полезное</a></li>
                        <li><a href="#">ЧАВО</a></li>
                      </ul>
                    </li>
                    <li><a href="#">НОВОСТИ</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ДОСТАВКА <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Безоплатно</a></li>
                        <li><a href="#">Оплата</a></li>
                        <li><a href="#">Гарантии</a></li>
                        <li><a href="#">График работы</a></li>
                      </ul>
                    </li>
                    <li><a href="#">КОНТАКТЫ</a></li>
                  </ul>
                  <!-- /top menu -->
                  <ul class="nav navbar-nav navbar-right">
                    <!-- <li><span class="glyphicon glyphicon-shopping-cart top-cart-icon" aria-hidden="true"></span></li> -->
                    <!-- <li><a href="#">Вход</a></li>
                    <li><a href="#">Регистрация</a></li> -->
                    <li><a href="/cart.php">Корзина (4)</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div><!-- /container -->

        <div class="container">
            <div class="page-wrapper">
            <div class="row page-content">
            <?php if($_SERVER['REQUEST_URI'] == '/') include_once 'carousel.php'; ?>
                <div class="col-md-9 col-md-push-3 content-block">
                