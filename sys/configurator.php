<?php
    //Get a value for a key, in any of the configurations files.
    function configurator_GetSetting($toFind)
    {
        foreach (glob("configuration/*.config") as $file) 
        {
            $fileStream = file($file);		
            foreach ($fileStream as $line) 
            {
                $lineSplitted = explode(':', $line);
                $key = $lineSplitted[0];
                $value = $lineSplitted[1];
                
                if($key == $toFind)
                    return $value;
            }
        }

        return "";
    }
?>