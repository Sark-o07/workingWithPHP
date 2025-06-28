<?php
use Core\Database;
use Core\Validator;
use Core\App;

$user_id = 1; // Assuming a logged-in user with ID 1 for demonstration purposes

$db = App::resolve(Database::class);

$errors = [];
$body = $_POST['body'] ?? '';
$note_id = $_POST['id'] ?? null;

$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $note_id])->findOrFail();

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = "Note with max 1000 characters is required.";
}

if (empty($errors)) {
    $db->query("UPDATE notes SET body = :body WHERE id = :id", [
        'body' => $body,
        'id' => $note_id
    ]);
    header("Location: /notes");
} else {
    view("notes/edit.view.php", [
        "heading" => "Edit Note",
        "errors" => $errors,
        "note" => $note,
    ]);
}
