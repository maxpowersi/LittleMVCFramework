<?php

	//Needed to config the default main view. In this way you avoid to set in each render the view name, and if you need
	//in the view some properties, you avoid to set them in each action.
	//You need receibe the $content, and pass to the function in a property. Additionaly, you can set more properties.
	function DefaultMainView($content)
	{
		RenderMainView("main_view", array("Content" => $content, "Version" => configurator_GetSetting("version")));
	}
	
	function Home()
	{
		RenderWithView("home");
	}

	function Payloads()
	{
		$Payloads = file_ReadFromDataTxt("payloads.txt");	
		RenderWithView("payloads", array("Payloads" => $Payloads));
	}

	function Setup()
	{	
		RenderWithView("setup");
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

		RenderWithView("setup_post");
	}

	function Benchmark()
	{
		$results = file_ReadFromDataCsv("tool_results.csv", ",", true);
		RenderWithView("benchmark", array("Results" => $results));
	}

?>