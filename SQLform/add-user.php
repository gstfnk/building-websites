<?php


$database = require(__DIR__ . "/database.php");

require(__DIR__ . "/errors.php");

$firstname = $_POST['firstname'] ?? null;
$lastname = $_POST['lastname'] ?? null;
$age = $_POST['age'] ?? null;

validateNotEmpty($firstname, "firstname", "Imię jest wymagane!");
validateNotEmpty($lastname, "lastname", "Nazwisko jest wymagane!");

if (!hasErrors()) {
    $stmt = $database->prepare("INSERT INTO users (firstname,lastname,age) VALUES (?,?,?)");
    $stmt->bind_param("ssi", $firstname, $lastname, $age);
    $stmt->execute();
}

header("location: index.php");

