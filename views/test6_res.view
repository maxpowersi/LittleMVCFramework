<?php ob_start() ?>

<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 6 - Login JSON - Explicación </h1>
    </div>
    <div>
        <p class="lead">La consulta básica de auntenticación SQL suele ser SELECT * FROM accounts WHERE username = 'admin' AND password = '123456'</p>
        <p class="lead">Ante esta consulta podemos inyectar en el campo password el valor "admin' --" y de esta forma logramos la consulta:</p>
        <p class="lead">SELECT * FROM accounts WHERE username = 'admin' -- AND password = '' la cual devuelve un conjunto de datos, si el usuario es existente.</p>
        <p class="lead">Para las bases de datos No SQL, podemos transformar la inyección en {$gt: ""} con lo que nos quedaria la consulta en </p> <p class="lead">{"username": "admin", "password": {"$gt": ""}}</p> lo cual devuelve un conjunto de datos, para un usuario existente, y cuyo password sea mayor en longitud al caracter vacío.</p>
        <p class="lead">Una alternativa a la inyección seria usar esta otra {"$ne": null} en donde buscamos distinto de nulo.</p>
        <p class="lead">El siguiente fragmento de código muestra como se realiza la consulta a la base de datos de mongodb. La linea 6 muestra como el párametro es directamente concatenado en la consulta.</p>	
    </div>
</div>

<div class="container">
    <pre class="prettyprint linenums">
        $conn = new MongoClient('mongodb://localhost');
        $db = $conn->nosqli;
        $collection = $db->users;
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE);
        $cursor = $collection->find($input);
    </pre>
</div>

<?php $Content = ob_get_clean() ?> 
<?php include "main_view.php" ?>