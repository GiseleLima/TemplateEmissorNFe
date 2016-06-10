<?php
define('BASE_URL', 'http://localhost/emissorAngular/');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

	 <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet">
	 
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo BASE_URL; ?>assets/css/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="<?php echo BASE_URL; ?>assets/js/jquery-2.2.3.js"></script>
	
	<script src="<?php echo BASE_URL; ?>assets/js/angular.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Emissor NFe</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo BASE_URL; ?>"><i class="fa fa-line-chart fa-fw"></i> Dashboard</a></li>
        <li><a href="<?php echo BASE_URL; ?>nova-nfe"><i class="fa fa-plus fa-fw"></i> Nova NFe</a></li>
		 <li><a href="<?php echo BASE_URL; ?>gerenciar-nfes"><i class="fa fa-list fa-fw"></i> Gerenciar NFe´s</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-folder fa-fw"></i> Cadastros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-users fa-fw"></i>  Clientes</a></li>
            <li><a href="produtos"><i class="fa fa-shopping-cart fa-fw"></i>  Produtos</a></li>
            <li><a href="#"><i class="fa fa-truck fa-fw"></i>  Transportes</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="padd">	
	<div id="wrapper">
	<div class="row">
	<div class="col-md-4 col-md-offset-4" style="margin-bottom:10px">
		<form>
            <div class="input-group custom-search-form">
                <input type="text" class="form-control input-lg" placeholder="Procurar NFe por Número">
				<span class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="button">
                        <i class="fa fa-search "></i>
                    </button>
                </span>
            </div>

		</form>
	 </div> 
	 </div>
