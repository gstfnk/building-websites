<?php
session_start();
if ($_SESSION["logged-in"] ?? false) {
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="styleLogin.css">
    <title>Gstfnk</title>
</head>
<body>
<div class="form-back">
    <h1>
        Zaloguj się do <span class="pink-color">Fun</span>Clubu!
    </h1>
    <form class="container" action="script.php" method="post" id="funClubForm">
        <div class="row">
            <div class="column column-10">
                <label for="username">
                    Login:
                </label>
            </div>
            <div class="column column-30">
                <input type="text" id="username" name="username" value = "admin">
            </div>
        </div>
        <div class="row">
            <div class="column column-10">
                <label for="password">
                    Hasło:
                </label>
            </div>
            <div class="column column-30">
                <input type="password" id="password" name="password" value = "test">
            </div>
        </div>
        <div class = "row"></div>
        <div class = "row">
            <div class="column column-20">
                <button type="reset">Wyczyść</button>
            </div>
            <div class="column column-20">
                <button type="submit" id="submitClick">Zaloguj</button>
            </div>
        </div>
        <div class = "row"></div>
        <div class = "row">
            <div class="column column-20">
                Dane do logowania:
            </div>
            <div class="column column-20">
                Login: admin <br>
                Hasło: test
            </div>
        </div>
    </form>
</div>

</body>
</html>
