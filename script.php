<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
if ($_SESSION["logged-in"] ?? false)
{
    header("Location: index.php");
    die();
}
if ($username == "admin" && $password == "test")
{
    //Przekieruj na stronę index.php
    header("Location: index.php");
    $_SESSION["logged-in"] = true;
}
else {
    //wróć do login.php
    header("Location: login.php");
}
die();

