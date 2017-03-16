<?php
    function Test6()
    {
        Render("test6");
    }

    function Test6Server()
    {
        try 
        {
            $conn = new MongoClient();
            $db = $conn->inosql;
            $collection = $db->users;	
            $inputJSON = file_get_contents('php://input');
            $input = json_decode($inputJSON, TRUE);		
            
            $cursor = $collection->find($input);
            
            if($cursor->count() == 0)
                echo "Credenciales incorrectas.";
            else
                echo "Bienvenido!";

            $conn->close();
        }
        catch (MongoConnectionException $e) 
        {
            die('Error connecting to MongoDB server : ' . $e->getMessage());
        }
        catch (MongoException $e) 
        {
            die('Error: ' . $e->getMessage());
        }
    }

    function Test6Res()
    {
        Render("test6_res");
    }
?>