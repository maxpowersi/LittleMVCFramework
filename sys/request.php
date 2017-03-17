<?php
    request_getRequestUri()
    {
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $name = basename($path);
        return $name;
    }
?>