<?php	
	function Render($viewName, $properties = array())
	{
		//Add version for all views.
		$properties["Version"] = configurator_getSetting("version");

		//We create in this scope, dinamic "properties"
		foreach ($properties as $key => $value) 
		{
			${$key} = $value;
		}

		include("views/".$viewName.".view");
	}

	function NotFound()
	{
		Render("not_found");
	}
?>