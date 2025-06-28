<?php

//get the data from the form

use Core\App;
use Core\Database;
use Core\Validator;

$heading = "Register";

$email = $_POST["email"] ?? null;
$password = $_POST["password"] ?? null;

//validate the data
$errors = [];

Validator::email($email) ?: $errors["email"] = "Email is not valid.";

Validator::string($password, 7, 255) ?: $errors["password"] = "Password must be at least 7 characters long.";
// if there are errors, redirect back to the form with the errors
if (!empty($errors)) {
    view("registration/create.view.php", [
        "heading" => $heading,
        "errors" => $errors,
    ]);
    exit();
}

//if there are no errors, check if the user already exists
$db = App::resolve(Database::class);
$user = $db->query("SELECT * FROM users WHERE email = :email", [
    "email" => $email,
])->find();

//if the user exists, redirect back to the form with an error message
if ($user) {
    view("registration/create.view.php", [
        "heading" => $heading,
        "errors" => [
            "email" => "User with this email already exists.",
        ],
    ]);
    exit();
}

//if the user does not exist, create a new user
$db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
    "email" => $email,
    "password" => password_hash($password, PASSWORD_DEFAULT),
]);

//set the user session
$_SESSION["user"] = [
    "email" => $email,
];

//set the flash message
$_SESSION["flash"] = [
    "success" => "Registration successful. You can now log in.",
];
// Redirect to the login page with a success message
header("Location: /");



// redirect to the login page with a success message