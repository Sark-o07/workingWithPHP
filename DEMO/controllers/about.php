<?php

$heading = "About Us";

dd($_SESSION["user"] ?? "No user session found.");

view("about.view.php", [
    "heading" => $heading,
]);