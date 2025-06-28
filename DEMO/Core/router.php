<?php
namespace Core;

class Router {
    public $routes = [];

    public function add($method, $uri, $controller) {
        $this->routes[] = compact('method', 'uri', 'controller');
    }

    public function get($uri, $controller) {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller) {
        $this->add('POST', $uri, $controller);
    }

    public function put($uri, $controller) {
        $this->add('PUT', $uri, $controller);
    }
    public function delete($uri, $controller) {
        $this->add('DELETE', $uri, $controller);
    }
    public function patch($uri, $controller) {
        $this->add('PATCH', $uri, $controller);
    }

    public function route($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === strtoupper($method) && $route['uri'] === $uri) {
                return require base_path($route['controller']);
            }
        }
        // If no route matches, abort with a 404 error
        $this->abort();
    }

    protected function abort($code = Response::HTTP_NOT_FOUND) {
        http_response_code($code);
        view("{$code}.view.php");
        die();
    }
}
// use Core\Response;

// $url = parse_url($_SERVER["REQUEST_URI"])["path"];

// $routes = require base_path("routes.php");

// function routeToController($url, $routes) {
//     if (array_key_exists($url, $routes)) {
//         require base_path($routes[$url]);
//     } else {
//         abort();
//     }
// }

// function abort($code = Response::HTTP_NOT_FOUND) {
//     http_response_code($code);
//     view("{$code}.view.php");
//     die();
// }

// routeToController($url, $routes);