<?php ob_start() ?>

<div class="page-header" style="padding-top: 20px;">
	<h1>Anexo - Payloads </h1>
</div>
<div>
	<p class="lead">A continuación hacemos un listado de los payloads usados en los ejemplos y algunos otros, a modo resumen.</p>
	<ul class="list-group">
		<?php
			foreach ($Payloads as $payload) 
			{
				echo ("<li class='list-group-item'>" . $payload . "</li>");
			}
		?>
	</ul>
</div>

<?php $Content = ob_get_clean() ?> 
<?php include "main_view.php" ?>