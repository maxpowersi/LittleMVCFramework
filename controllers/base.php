<?php	
	
	function GetVersion()
	{
		$version = "";
		$archivo = file("version.txt");		
		foreach ($archivo as $line) 
			$version = $line;

		return $version;
	}

	function Render($viewName, $properties = array())
	{
		//Add version for all views.
		$properties["Version"] = GetVersion();

		//We create in this scope, dinamic "properties"
		foreach ($properties as $key => $value) 
		{
			${$key} = $value;
		}

		include("views/".$viewName.".php");
	}
?>