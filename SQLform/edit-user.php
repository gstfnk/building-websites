<?php

$database = require(__DIR__ . "/database.php");

require(__DIR__ . "/errors.php");

$firstname = $_POST['firstname'] ?? null;
$lastname = $_POST['lastname'] ?? null;
$age = $_POST['age'] ?? null;
$id = $_POST['save-user'];

validateNotEmpty($firstname, "firstname", "Imię jest wymagane!");
validateNotEmpty($lastname, "lastname", "Nazwisko jest wymagane!");

if (! hasErrors()) {
    $stmt = $database->prepare("UPDATE users SET firstname=?, lastname=?, age=? WHERE id=?");
    $stmt->bind_param("ssii", $firstname, $lastname, $age, $id);
    $stmt->execute();
}

header("location: index.php");
