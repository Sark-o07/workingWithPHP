<?php

$_SESSION["user"] = [
    "name" => "John Doe",
    "email" => "john.doe@mail.com",
];

$heading = "Home";

view("index.view.php", [
    "heading" => $heading,
]);