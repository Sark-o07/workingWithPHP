<?php

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

// Notes routes
$router->get("/notes", "controllers/notes/index.php");

$router->get("/note", "controllers/notes/show.php");
$router->delete("/note", "controllers/notes/destroy.php");

$router->get("/note/edit", "controllers/notes/edit.php");
$router->put("/note", "controllers/notes/update.php");

$router->get("/notes/create", "controllers/notes/create.php");
$router->post("/notes", "controllers/notes/store.php");

// Registration routes
$router->get("/register", "controllers/registration/create.php");
$router->post("/register", "controllers/registration/store.php");