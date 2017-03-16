<?php ob_start() ?>

<div class="container">
    <div class="page-header" style="padding-top: 20px;">
        <h1>Prueba 2 - Búsqueda de pedidos - Explicación </h1>
    </div>
    <div>
        <p class="lead">En el primer ejemplo vimos la tipica inyección sql llevada a No Sql. En este caso la inyección es un poco mas complicada, ya que la misma tiene el parametro concatenado en el medio y no al final.</p>
        <p class="lead">La inyección que queda es user'; return this.id > 1; }//</p>
        <p class="lead">Entre las diferencias con Prueba 1, encontramos que necesitamos agregar la sentencia de inicio de comentario //  y el simbolo final de instrucción ; para poder obtener el listado completo de la colección.</p>
        <p class="lead">El siguiente fragmento de código muestra la linea (1) en donde se ejecuta la consulta a mongodb. En la misma se puede ver como el parametro esta metido en el medio en vez del final de la consulta.</p>
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