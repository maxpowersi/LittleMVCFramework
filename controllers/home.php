<?php

	function DefaultMainView($content)
	{
		RenderMainView("main_view", array("Content" => $content));
	}
	
	function Home()
	{
		RenderWithView("home");
	}

	function Home_POST()
	{
		$sitio = GetParameterPOST("sitio");
		$entidad = GetParameterPOST("entidad");
		$servicio = GetParameterPOST("servicio");
		$metodo = GetParameterPOST("metodo");
		$Datos = array();
		$Datos["dominio"] = $sitio;
		$Datos["ip"] = "IP";
		$Datos["info_dominio"] = $servicio;
		$Datos["info_ip"] = $metodo;
		RenderWithView("home_post", array("Datos" => $Datos));
	}

?>