<?php ob_start() ?>

<div class="container">
		<div class="page-header" style="padding-top: 20px;">
			<h1>Prueba 4 - Búsqueda de pedidos</h1>
			<h4>Ingresa en el formulario el número de pedido a buscar, por ejemplo 1337. <a href="test4_res" target="_blank">Respuesta</a></h4>
		</div>
		<div>	
			<form method="get" id="usersearch">
				<div class="form-group">
					<label>Número de pedido</label>
					<input type='text' name='ordersearch' id='ordersearch' class='form-control' style='width: 30%;' />
				</div>			
				<button type="submit" class="btn btn-default">Enviar</button>
			</form>     
		</div>
		<div>
			<?php
				if ($ShowLabel)
					echo "</br>" . $Count. " resultado(s) encontrado(s) <br/><br/>";

				foreach ($Result as $item) 
				{
						echo "<div class='form-group' style='border: solid 1px black; padding:7px; width: 30%'>";
						
						echo "<label>Pedido</label>"."<input type='text' disabled='true' class='form-control' value='".$item["id"] . "' /><br/>";
						echo "<label>Nombre</label>"."<input type='text' disabled='true' class='form-control' value='".$item["name"] . "' /><br/>";
						echo "<label>Item</label>"."<input type='text' disabled='true' class='form-control' value='".$item["item"] . "' /><br/>";
						echo "<label>Cantidad</label>"."<input type='text' disabled='true' class='form-control' value='".$item["quantity"] . "' /><br/>";
						
						echo "</div>";
				}
			?>
		</div>			
</div>
<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>