<?php

const TOKEN = true;

$users = [];
$database = require(__DIR__."/database.php");
$result = $database->query("SELECT * FROM users");

if ($result) {
    while($user = $result->fetch_object()){
        $users[] = $user;
    }
}
$result->close();

return $users;
