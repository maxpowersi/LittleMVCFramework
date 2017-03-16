<?php
	function Test5()
	{
		$Result = array();
		$Count = 0;
		$ShowLabel = false;

        if (isset($_GET['ordersearch']) && !empty($_GET['ordersearch'])) 
        {
            $ShowLabel = true;
            try
            {
                $conn = new MongoClient();
                $db = $conn->inosql;
                $collection = $db->orders;
                $search = $_GET['ordersearch'];
                $js = "function () { var query = '". $search . "'; return this.id == query;}";
                $cursor = $collection->find(array('$where' => $js));

               $Count = $cursor->count();

                foreach ($cursor as $obj) 
                {
					$item = array();

					$item['id'] = $obj['id'];
					$item['name'] = $obj['name'];
					$item['item'] = $obj['item'];
					$item['quantity'] = $obj['quantity'];

					$Result[] = $item;
                }

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

		Render("test5", array("Count" => $Count, "Result" => $Result));
	}

    function Test5Server()
    {
        try 
        {
            $conn = new MongoClient();
            $db = $conn->nosqli;
            $collection = $db->paymentinfo;
            $search = $_GET['acctid'];				
            $cursor = $collection->find(array('id' => $search));
            
            if($cursor->count() == 0)
                echo "";

            foreach ($cursor as $obj) 
            {
                echo $obj['cc'];
            }
            
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

	function Test5Res()
	{
		Render("test5_res");
	}
?>