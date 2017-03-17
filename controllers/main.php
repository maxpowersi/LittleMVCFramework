<?php
	function Home()
	{
		Render("home");
	}
	
	function Payloads()
	{
		$Payloads = array();

		$archivo = file("data/payloads.txt");		
		foreach ($archivo as $line) 
		{
			$Payloads[] = $line;
		}
		
		Render("payloads", array("Payloads" => $Payloads));
	}

	function Setup()
	{	
		$POST = $_SERVER['REQUEST_METHOD'] === 'POST';
		
		if ($POST)
			Setup_POST();
		else
			Render("setup");
	}	

	function Setup_POST()
	{	
		$conn = new MongoClient();	
		$db = $conn->inosql;

		$collection = $db->users;
		$collection->drop();
		$a = array("name" => "Jhon doe", "username" => "admin", "email" => "admin@d.com", "password" => "123456");
		$b = array("name" => "Mr Robot", "username" => "singleuser", "email" => "singleuser@d.com", "password" => "123456");
		$collection->insert($a);	
		$collection->insert($b);
	
		$collection = $db->orders;
		$collection->drop();
		$a = array("id" => "122", "name" => "Mr Robot", "item" => "tablet", "quantity" => "1");
		$b = array("id" => "1337", "name" => "Jhon doe", "item" => "computer", "quantity" => "60");
		$collection->insert($a);	
		$collection->insert($b);

		$collection = $db->paymentinfo;
		$collection->drop();
		$a = array("id" => "1", "name" => "Jhon doe", "cc" => "4045 4545 2322 3243", "cvv2" => "345");
		$b = array("id" => "2", "name" => "Mr Robot", "cc" => "2222 2222 2222 2222", "cvv2" => "222");
		$collection->insert($a);	
		$collection->insert($b);

		$conn->close();

		Render("setup_post");
	}

?>