<?php
    function configurator_getSetting($toFind)
    {
        foreach (glob("configuration/*.config") as $file) 
        {
            $fileStream = file("configuration/".$file);		
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