<?php

$heading = "Note";

$config = require base_path("config.php");

$currentUserId = 1; // This should be set based on the logged-in user, for example from a session variable.
$id = $_GET['id'] ?? null;

$db = new Database($config["database"]);

$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $id])->findOrFail();

authorize($note['user_id'] === $currentUserId);


view("notes/show.view.php", [
    'heading' => $heading,
    'note' => $note,
]);