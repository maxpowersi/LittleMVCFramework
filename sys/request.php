<?php

    //Get the URL path after the domain
    function request_GetRequestUri()
    {
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $name = basename($path);
        return $name;
    }

    //Return if the request is POST
    function request_IsPOST()
    {
        return $POST = $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    //Return JSON from request content, in array format
    function request_GetJson()
    {
        $inputJSON = file_get_contents('php://input');
        $input = json_decode($inputJSON, TRUE);		
        return $input;
    }
?>