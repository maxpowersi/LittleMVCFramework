<?php ob_start() ?>

<div class="container">
	<div class="page-header" style="padding-top: 20px;">
		<h1>Prueba 1 - Búsqueda de usuarios</h1>
		<h4>Ingresa en el formulario el nombre de usuario a buscar, por ejemploe admin. <a href="test1_res" target="_blank">Respuesta</a></h4>
	</div>
	<div>    	       
		<form method="post" id="usersearch">
			<div class="form-group">
				<label>Nombre de usuario</label>
				<input type='text' name='usersearch' id='usersearch' class='form-control' style='width: 30%;' />
			</div>			
			<button type="submit" class="btn btn-default">Enviar</button>
		</form>
	</div>
	<div>
		<?php
			echo "</br>" . $UserCount. " resultado(s) encontrado(s) <br/><br/>";
			foreach ($Result as $item) 
			{
					echo "<div class='form-group' style='border: solid 1px black; padding:7px; width: 30%'>";
					
					echo "<label>Nombre</label>"."<input type='text' disabled='true'class='form-control' value='".$item["Name"] . "' /><br/>";
					echo "<label>Nombre de usuario</label>"."<input type='text' disabled='true' class='form-control' value='".$item["Username"] . "' /><br/>";
					echo "<label>Correo</label>"."<input type='text' disabled='true' class='form-control' value='".$item["Email"] . "' /><br/>";
					
					echo "</div>";
			}
		?>
	</div>
</div>
<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>