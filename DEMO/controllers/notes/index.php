<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);
$heading = "Notes";

$notes = $db->query("SELECT * FROM notes where user_id = 1")->fetchAll();

view("/notes/index.view.php", [
    "heading" => $heading,
    "notes" => $notes,
]);