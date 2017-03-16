<?php

  //Include all controllers
  include ("controllers/base.php");  
  include ("controllers/main.php");
  include ("controllers/test1.php");
  include ("controllers/test2.php");
  include ("controllers/test3.php");
  include ("controllers/test4.php");
  include ("controllers/test5.php");
  include ("controllers/test6.php");

  //Parse the request
  $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
  $name = basename($path);
   
  //Load the routing rules
  $route = array();
  $archivo = file("routing.txt");		
  foreach ($archivo as $line) 
  {
    $lineSplitted = explode('-', $line);
    $key = $lineSplitted[0];
    $value = $lineSplitted[1];
    $route[$key] = $value;
  }

  //Decide
  if(array_key_exists($name, $route))
    eval("$route[$name]();");
  else
    NotFound();
?>