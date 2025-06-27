<?php

$heading = "Notes";

var_dump(base_path("config.php"));
$config = require base_path("config.php");

$db = new Database($config["database"]);

$notes = $db->query("SELECT * FROM notes where user_id = 1")->fetchAll();


view("/notes/index.view.php", [
    "heading" => $heading,
    "notes" => $notes,
]);