<?php ob_start() ?>

<div class="container">
		<div class="page-header" style="padding-top: 20px;">
			<h1>Prueba 4 - Búsqueda de pedidos - Explicación </h1>
		</div>
		<div>
			<p class="lead">En el primer ejemplo vimos la tipica inyección sql llevada a No Sql. En este caso la inyección es un poco mas complicada, ya que la misma tiene el parametro concatenado en el medio y no al final.</p>
			<p class="lead">La inyeccón que queda es user'; CODIGO; }//</p>
			<p class="lead">En ejemplos anteriores vimos como obtener todos los registros de la base de datos, en este vamos a ver como causar un ataque DOS. La inyección a realizar es user'; while(1); }// en la cual insertamos un while(1) el cual causara un loop infinito y dependiendo el timeout de mongodb podria ser desde minutos hasta horas.</p>
			<p class="lead">El siguiente fragmento de código muestra la linea afectada.</p>
		</div>
    </div>
<div class="container">
    <pre class="prettyprint linenums">
        $js = "function () { var query = '". $search . "'; return this.id == query;}";
        $cursor = $collection->find(array('$where' => $js));
    </pre>
</div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>