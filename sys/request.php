<?php
//Get JSON vars in body
function request_GetJSONBody()
{
    $json = file_get_contents('php://input');
    return json_decode($json, true);
}

//Get a GET parameter in a secure way
function request_GetParameterGET($parameterName)
{
    if (isset($_GET[$parameterName]))
        return htmlentities($_GET[$parameterName]);
    else
        return null;
}

//Get a POST parameter in a secure way
function request_GetParameterPOST($parameterName)
{
    return htmlentities($_POST[$parameterName]);
}
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

//Return if the request is DELETE
function request_IsDELETE()
{
    return $POST = $_SERVER['REQUEST_METHOD'] === 'DELETE';
}

//Return if the request is PUT
function request_IsPUT()
{
    return $POST = $_SERVER['REQUEST_METHOD'] === 'PUT';
}

//Return if the request is GET
function request_IsGET()
{
    return $POST = $_SERVER['REQUEST_METHOD'] === 'GET';
}

//Return JSON from request content, in array format
function request_GetJson()
{
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, TRUE);
    return $input;
}
?>