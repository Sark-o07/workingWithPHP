<?php

$heading = "Create Note";

$config = require base_path("config.php");

$db = new Database($config["database"]);

$user_id = 1; // Assuming a logged-in user with ID 1 for demonstration purposes

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = $_POST['body'] ?? '';

// dd($body);

    if (!Validator::string($body, 1, 1000)) {
        $errors['body'] = "Note with max 1000 characters is required.";
    }

    if (empty($errors)) {
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", [
            'body' => $body,
            'user_id' => $user_id
        ]);
        header("Location: /notes");
    }
}

view ("notes/create.view.php", [
    "heading" => $heading,
    "errors" => $errors,
    "body" => $body
]);