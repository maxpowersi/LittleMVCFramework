<?php ob_start() ?>

<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 3 - Información de clientes</h1>
        <h4>Ingresa en el formulario el número de cliente a buscar, por ejemplo 1. <a href="test3_res" target="_blank">Respuesta</a></h4>
    </div>
    <div>	
        <form method="get">
            <div class="form-group">
                <label>Número de cliente</label>
                <input type='text' name='acctid' id='acctid' class='form-control' style='width: 30%;' />
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
                
                echo "<label>Nombre</label>"."<input type='text' disabled='true' class='form-control' value='".$item["name"] . "' /><br/>";
                echo "<label>Número de cliente</label>"."<input type='text' disabled='true' class='form-control' value='".$item["id"] . "' /><br/>";
                echo "<label>Número de tarjeta</label>"."<input type='text' disabled='true' class='form-control' value='".$item["cc"] . "' /><br/>";
                echo "<label>Código de seguridad</label>"."<input type='text' disabled='true' class='form-control' value='".$item["cvv2"] . "' /><br/>";
                
                echo "</div>";
			}
        ?>
    </div>
</div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>