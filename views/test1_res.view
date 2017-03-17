<?php ob_start() ?>

<div class="container">
	<div class="page-header" style="padding-top: 20px;">
		<h1>Prueba 1 - Búsqueda de usuarios - Explicación </h1>
	</div>
	<div>
		<p class="lead">En el primer ejemplo veremos la tipica inyección sql llevada a No Sql. La inyección tradicional ' OR '1' = '1 la transformamos a una sintaxis javascript  con lo cual nos queda ' || '1' == '1</p>
		<p class="lead">Ahora estamos listo para inyectar en el campo el valor anterior. Una vez insertado, veremos que tenemos acceso a todos los elementos de la colección.</p>
		<p class="lead">El siguiente fragmento de código muestra como se realiza la consulta a la base de datos de mongodb.  La linea 5 muestra como el párametro es directamente concatenado en la consulta.</p>	
	</div>
</div>
<div class="container">
	<pre class="prettyprint linenums">
	$conn = new MongoClient('mongodb://localhost');
	$db = $conn->nosqli;
	$collection = $db->users;
	$search = $_POST['usersearch'];
	$cursor = $collection->find(array('$where' => "function () { return this.username == '$search' ;}"));
	</pre>
</div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>