<?php
use Core\Router;

session_start();

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "Core/functions.php";

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);

    require base_path("{$class}.php");
});

require base_path("bootstrap.php");

$router = new Router();

$routes = require base_path("routes.php");

$url = parse_url($_SERVER["REQUEST_URI"])["path"];

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($method, $url);
