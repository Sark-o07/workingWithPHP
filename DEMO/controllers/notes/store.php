<?php
use Core\Database;
use Core\Validator;
use Core\App;

$user_id = 1; // Assuming a logged-in user with ID 1 for demonstration purposes

$db = App::resolve(Database::class);

$errors = [];
$body = $_POST['body'] ?? '';

if (!Validator::string($body, 1, 1000)) {
    $errors['body'] = "Note with max 1000 characters is required.";
}

if (empty($errors)) {
    $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
        'body' => $body,
        'user_id' => $user_id
    ]);
    header("Location: /notes");
} else {
    view("notes/create.view.php", [
        "heading" => "Create Note",
        "errors" => $errors,
    ]);
}

