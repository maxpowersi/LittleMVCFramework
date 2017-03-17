<?php
    function loader_LoadRouting()
    {
        $routes = array();

        foreach (glob("routing/*.routing") as $file) 
        {
            $fileStream = file("routing/".$file);		
            foreach ($fileStream as $line) 
            {
                $lineSplitted = explode(':', $line);
                $key = $lineSplitted[0];
                $value = $lineSplitted[1];
                $routes[$key] = $value;
            }
        }

        return $routes;
    }

    function loader_LoadDependencies($path)
    {
        foreach (glob("$path/*.php") as $file) 
        {
            include($file);
        }           
    }
?>