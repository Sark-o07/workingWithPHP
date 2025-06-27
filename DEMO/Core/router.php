<?php
$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = require base_path("routes.php");

function routeToController($url, $routes) {
    if (array_key_exists($url, $routes)) {
        require base_path($routes[$url]);
    } else {
        abort();
    }
}

function abort($code = Response::HTTP_NOT_FOUND) {
    http_response_code($code);
    view("{$code}.view.php");
    die();
}

routeToController($url, $routes);