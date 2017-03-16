<?php ob_start() ?>

<script>	
 	function enviar()
	 {
		if (isNaN($("#acctidd").val()))
		{
			alert("Debe ingresar un valor númerico");
			return;
		}			

		var response = $.ajax({ type: "GET",   
                        		url: "test5_server?acctid="+$("#acctidd").val(),   
                        		async: false
                              }).responseText;

		if(response != "")
		{
			$("#cardNumber").val(response);
			$("#acctidd").val("");
			$("#contResult").show();
		}
		else
		{
			$("#contResult").hide();
		}
	 }
 </script>
<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 5 - Información de clientes</h1>
        <h4>Ingresa en el formulario el número de cliente, por ejemplo 1. <a href="test5_res" target="_blank">Respuesta</a></h4>
    </div>
	<div>
		<form>
			<div class="form-group">
				<label>Número de cliente</label>
				<input type='text' name='acctid' id='acctidd' class='form-control' style='width: 30%;' />
			</div>			
			<button type="button" class="btn btn-default" onclick="enviar();">Enviar</button>
		</form> 
	</div>
	<br/>
	<div class="form-group" style="border: solid 1px black; padding:7px; width: 30%;" id="contResult" name="contResult">
		<label>Número de tarjeta</label>
		<input id="cardNumber" type='text' disabled='true' class='form-control' value=''/>
	</div>
	<script>
		$("#contResult").hide();
	</script>
</div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>