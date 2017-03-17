<?php	

	//Action to not found event
	function NotFound()
	{
		RenderWithView("not_found");
	}

	//Action to error event
	function Error($e)
	{
		RenderWithView("generic_error", array("msg" => $e));
	}

	//Get a GET parameter in a secure way
	function GetParameterGET($parameterName)
	{
		return htmlentities($_GET[$parameterName]);
	}

	//Get a POST parameter in a secure way
	function GetParameterPOST($parameterName)
	{
		return htmlentities($_POST[$parameterName]);
	}

	//Call from a function in a controller, an pass the parameters, to set the defaul view, with default properties.
	function RenderMainView($view, $properties = array())
	{
		foreach ($properties as $key => $value) 
			${$key} = $value;	

        include "/../views/". $view . ".view";
	}

	//Render a view, sending many variables to it
	function RenderWithView($viewName, $properties = array(), $mainView = null)
	{
		//We create in this scope, dinamic "properties"
		foreach ($properties as $key => $value) 
			${$key} = $value;		

		if($mainView != null)
		{
			//specific view
			ob_start();
			include("views/".$viewName.".view");
			$Content = ob_get_clean();			
			include "/../views/". $mainView . ".view";
		}
		else
		{
			//default view
			ob_start();
			include("views/".$viewName.".view");
			$Content = ob_get_clean();		
			DefaultMainView($Content);
		}	
	}

	function Render($viewName, $properties = array())
	{
		//We create in this scope, dinamic "properties"
		foreach ($properties as $key => $value) 
			${$key} = $value;		

		include("views/".$viewName.".view");	
	}
?>