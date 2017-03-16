<!DOCTYPE html>
<html>
<head>
    <title>iNoSql</title>
	<link rel="icon" href="res\img\icon.png">
	<link rel="stylesheet" type="text/css" href="res\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="res\bootstrap\css\bootstrap-theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="res\bootstrap\js\bootstrap.js"></script> 
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
	<style>
    	.prettyprint ol.linenums > li { list-style-type: decimal; }
		.lead { font-size: 17px; }
	</style>  
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">iNoSql <?php echo $Version; ?></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<li id="menu-index"><a href="home">Inicio</a></li>
				<li id="menu-index"><a href="setup">Instalar</a></li>
				<li id="menu-index"><a href="payloads">Listado de Payloads</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pruebas <span class="caret"></span></a>
					<ul class="dropdown-menu">
					<li><a href="test1">1 - Búsqueda de usuarios</a></li>
					<li><a href="test2">2 - Búsqueda de pedidos</a></li>
					<li><a href="test3">3 - Información de clientes</a></li>
					<li><a href="test4">4 - Búsqueda de pedidos</a></li>
					<li><a href="test5">5 - Información de clientes</a></li>
					<li><a href="test6">6 - Login JSON</a></li>
					</ul>
				</li>
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
		<?php echo $Content ?>
    </div>
</body>
</html>