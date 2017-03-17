<?php ob_start() ?>

<script type="text/javascript">
    function enviar()
    {
            var response = $.ajax({
                                    type: "POST",
                                    url: "/inosql/web/test6_server",
                                    data: JSON.stringify({username:$("#user").val(), password: $("#pass").val()}),
                                    contentType: "application/json",
                                    dataType: "json",
                                    async: false
                                }).responseText;
            $("#user").val("");
            $("#pass").val("");
            alert(response);
    }
</script>

<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 6 - Login JSON</h1>
        <h4>Ingresa en el formulario las credenciales de autenticación, por ejemplo el nombre de usuario es admin. <a href="test6_res" target="_blank">Respuesta</a></h4>
    </div>
    <div>	
        <form method="get">
			<div class="form-group">
				<label>Nombre de usuario</label>
				<input type='text' name='user' id='user' class='form-control' style='width: 30%;' />
			</div>
            <div class="form-group">
				<label>Contraseña</label>
				<input type='password' name='pass' id='pass' class='form-control' style='width: 30%;' />
			</div>			
			<button type="button" class="btn btn-default" onclick="enviar();">Enviar</button>
        </form>
    </div>
</div>

<?php $Content = ob_get_clean() ?>
<?php include "main_view.php" ?>