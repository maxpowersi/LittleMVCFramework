<?php
  include("loader.php");  
  
  loader_LoadDependencies("sys");
  loader_LoadDependencies("controllers");
  loader_LoadDependencies("models");

  $name = request_getRequestUri();
  $routes = loader_LoadRouting();

  if(array_key_exists($name, $routes))
    eval("$route[$name]();");
  else
    NotFound();
?>