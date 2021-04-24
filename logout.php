<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    session_destroy();
}
header("Location: login.php");
