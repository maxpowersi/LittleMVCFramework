<?php
    define("CONTENT_TYPE_PLAIN", "text/plain");
    define("CONTENT_TYPE_HTML", "text/plain");

    function response_SetHeader($key, $value)
    {
        header("$key: $value");
    }

    function response_Write($data, $contentType = CONTENT_TYPE_PLAIN)
    {
        response_SetHeader("Content-Type: ", $contentType);
        echo htmlentities($data);
    }
?>