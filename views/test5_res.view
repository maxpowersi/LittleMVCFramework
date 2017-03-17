<?php ob_start() ?>

<div class="container">
		<div class="page-header" style="padding-top: 20px;">
			<h1>Prueba 5 - Información de clientes - Explicación </h1>
		</div>
		<div>
			<p class="lead">Este caso es similar al caso 3, con la diferencia, de que no envia por GET sino que hace un request ajax. Es muy común que un sitio que trabaja con base de datos No Sql use ajax. Si observamos el código javascript vemos que llama a una URL por GET y le pasa por parametro el valor ingresado en el input.</p>
		</div>
    </div>

	<div class="container">
<pre class="prettyprint linenums">
var response = $.ajax({ type: "GET",   
                        url: "ajax1_server?acctid="+$("#acctidd").val(),   
                        async: false
                      }).responseText;
</pre>
	</div>

	 <div class="container">
		<div>
            <p class="lead">De todas las inyecciones vistas anteriormente vamos a utilizar la inyección array en el parámetro GET. ?acctid[$ne]=999</p>
			<p class="lead">El siguiente fragmento de código muestra el query realizado a mongodb desde PHP.</p>
		</div>
    </div>

	<div class="container">
<pre class="prettyprint linenums">
$cursor = $collection->find(array('id' => array('$ne' => "999")));
</pre>
	</div>
		 <div class="container">
		<div>
			<p class="lead">De esta forma, se solicitan todos los pagos con id diferente a 999.</p>
		</div>
    </div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>