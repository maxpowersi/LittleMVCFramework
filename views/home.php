<?php ob_start() ?>

<div class="page-header" style="padding-top: 20px;">
	<h1>Introducción</h1>
</div>
<p class="lead">En este sitio encontrarás varias páginas de prueba para probar tus habilidades de NoSql injection. El mismo fue desarrollado con tecnologías open source y software libre. Cada página incluye una explicación de la misma y ejemplo de código.</p>
<p class="lead">
	<img src="res/img/apache.png" width="300px" height="100px">
	<img src="res/img/php.png" width="300px" height="100px">
	<img src="res/img/mongdb.png" width="300px" height="100px">
	<img src="res/img/bootstrap.png" width="100px" height="100px">
	<img src="res/img/jquery.png" width="200px" height="50px">            
</p>

<?php $Content = ob_get_clean() ?> 
<?php include "main_view.php" ?>