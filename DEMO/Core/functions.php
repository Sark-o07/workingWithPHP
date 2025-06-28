<?php
use Core\Response;


function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</prep>";

    die();
}

function isCurrentPage($path) {
    return $_SERVER["REQUEST_URI"] === $path;

}

function authorize($condition, $status = Response::HTTP_FORBIDDEN) {
    if (!$condition) {
        abort($status);
    }
}

function abort($code = Response::HTTP_NOT_FOUND) {
    http_response_code($code);
    view("{$code}.view.php");
    die();
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $data = []) {
    extract($data);
    return require base_path("views/{$path}");
}
