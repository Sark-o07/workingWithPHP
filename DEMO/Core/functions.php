<?php
namespace Core;

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

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $data = []) {
    extract($data);
    return require base_path("views/{$path}");
}