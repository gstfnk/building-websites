<?php

const TOKEN = true;

if ($_POST["add-user"] ?? false) {
    require(__DIR__ . "/add-user.php");
    return;
}

if ($_POST["delete-user"] ?? false) {
    require(__DIR__ . "/delete-user.php");
    return;
}

if ($_POST["edit-user"] ?? false) {
    $id = $_POST["edit-user"];
    header("location: index.php?id=$id&edit");
    return;
}

if ($_POST["save-user"] ?? false) {
    require(__DIR__ . "/edit-user.php");
    return;
}

header("location: index.php");
