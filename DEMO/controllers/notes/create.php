<?php
use Core\Validator;

$heading = "Create Note";
  
view ("notes/create.view.php", [
    "heading" => $heading,
    "errors" => [],
]);