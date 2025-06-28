<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$heading = "Edit Note";
$currentUserId = 1; // This should be set based on the logged-in user, for example from a session variable.
$note_id = $_GET['id'] ?? null;


$note = $db->query("SELECT * FROM notes where id = :id", ['id' => $note_id])->findOrFail();

authorize($note['user_id'] === $currentUserId);


view("notes/edit.view.php", [
    'heading' => $heading,
    'note' => $note,
    'errors' => [],
]);