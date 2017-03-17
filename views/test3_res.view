 <?php ob_start() ?>

<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 3 - Información de clientes - Explicación </h1>
    </div>
    <div>
        <p class="lead">El formulario envia por GET, un parametro a otra URL, la cual toma ese valor y realiza un query a MongoDB. Si manipulamos el párametro directamente en la URL, y ponemos ?acctid[$ne]=999 tendremos acceso a todos los datos de la colección.</p>
        <p class="lead">El siguiente fragmento de código muestra como se realiza la consulta a MongoDB. En particular la linea 5 envia el parametro acctid, directamente sin chequear y/o convertir a string.</p>
    </div>
</div>

<div class="container">
    <pre class="prettyprint linenums">
        $conn = new MongoClient();
        $db = $conn->nosqli;
        $collection = $db->paymentinfo;
        $search = $_GET['acctid'];				
        $cursor = $collection->find(array('id' => $search));
    </pre>
</div>

<div class="container">
    <div>
        <p class="lead">PHP convierte automáticamente acctid[$ne]=999 a array('$ne' => "999") en donde $ne es el operador not equal. Quedando la consulta final: </p>
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