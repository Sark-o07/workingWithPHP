<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $_POST['id'] ?? null;

$currentUserId = 1; // Assuming a logged-in user with ID 1 for demonstration purposes

$note = $db->query('
    SELECT * FROM notes WHERE id = :id', [
    'id' => $id,
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('
    DELETE FROM notes WHERE id = :id', [
    'id' => $id,
]);

header("Location: /notes");
exit;
