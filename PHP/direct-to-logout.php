<?php
session_start();
if (!$_SESSION["logged-in"]) {
    header("Location: /login.php");
    die();
}

