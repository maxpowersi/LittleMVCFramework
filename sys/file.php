<?php

    //Return array of string, where each item is a line.
    function file_ReadFromDataTxt($name)
    {
        $list = array();

		$fileStream = file("data/"."$name");		
		foreach ($fileStream as $line) 		
			$list[] = $line;	
			
        return $list;
    }

    //Return an array key, value from a CSV file in data folder
    function file_ReadFromDataCsv($nameFile, $delimiter, $firstLineIsHeader = false)
    {
        $list = array();
        $countLine = 0;
        $fileStream = file("data/"."$nameFile");	
        $headers = array();	

        foreach ($fileStream as $line) 
        {
            //Inside file
            $lineSplitted = explode($delimiter, $line);
            $item = array();
            $fieldCounter = 0;
            foreach($lineSplitted as $field)
            {
                $field = trim($field);
                //Inside line
                if($firstLineIsHeader)
                {
                    if($countLine == 0)
                    {
                        //Headers
                        $headers[$fieldCounter] = $field;
                    }
                    else
                    {
                        //Data
                        $item[$headers[$fieldCounter]] = $field;
                    }
                }
                else
                {
                    $item[$fieldCounter]=$field;
                }
                
                $fieldCounter++;
            }

            if(!$firstLineIsHeader || ($firstLineIsHeader && $countLine != 0))
                $list[] = $item;

            $countLine++;
        }    
            
        return $list;
    }
?>