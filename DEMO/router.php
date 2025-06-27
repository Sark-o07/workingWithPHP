<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = require "routes.php";

function routeToController($url, $routes) {
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = Response::HTTP_NOT_FOUND) {
    http_response_code($code);
    require "views/$code.view.php";
    die();
}

routeToController($url, $routes);