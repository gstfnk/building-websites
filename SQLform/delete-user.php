<?php

$database = require(__DIR__ . "/database.php");
$id = $_POST["delete-user"];
$stmt = $database->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("location: index.php");
