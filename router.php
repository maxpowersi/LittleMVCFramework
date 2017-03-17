<?php
  include("loader.php");  
  
  loader_LoadDependencies("sys");
  loader_LoadDependencies("models");
  loader_LoadDependencies("controllers");
  
  try
  {
    $name = request_GetRequestUri();
    $routes = loader_LoadRouting();

    if(array_key_exists($name, $routes))
    {
      if(request_IsPOST())
      {
        $functionName = trim($routes[$name])."_POST";
        eval("$functionName();");
      }
      else
        eval("$routes[$name]();"); 
    }
    else
      NotFound();
  }
  catch (Exception $e)
  {
    Error($e);
  }
?>