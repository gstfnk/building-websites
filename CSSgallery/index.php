<?php
include __DIR__."/../PHP/direct-to-logout.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <title>Zadanie 3B</title>
    <style>
        body {
            background-color: #0b3468;
            text-align: center;
            font-family: 'Amatic SC', cursive;
            color: #e8e5ea;
            font-size: 40px;
        }

        h1, h2 {
            margin-bottom: 0;
            font-size: 50px;
        }

        .table {
            display: flex;
            margin: auto;
            width: 50%;
            justify-content: space-between;
        }

        img {
            height: 200px;
        }

        .column {
            display: flex;
            flex-direction: column;
            padding: 40px 10px 20px;
        }
    </style>
</head>
<?php
include __DIR__."/../PHP/logout-button.php"
?>
<h1>
    Galeria Kuców
</h1>
<body>
<div class="table">
    <div class="column">
        <img src="assets/images/applejack.png" alt="applejack">
        Applejack
    </div>
    <div class="column">
        <img src="assets/images/twist.png" alt="twist">
        Twist
    </div>
    <div class="column">
        <img src="assets/images/pinkie-pie.png" alt="pinkie pie">
        Pinkie Pie
    </div>
</div>
<div class="table">
    <div class="column">
        <img src="assets/images/diamond-tiara.png" alt="diamondtiara">
        Diamond Tiara
    </div>
    <div class="column">
        <img src="assets/images/fluttershy.png" alt="fluttershy">
        Fluttershy
    </div>
    <div class="column">
        <img src="assets/images/rumble.png" alt="rumble">
        Rumble
    </div>
</div>
<div class=table>
    <div class="column">
        <img src="assets/images/rarity.png" alt="rarity">
        Rarity
    </div>
    <div class="column">
        <img src="assets/images/sunny-daze.png" alt="sunny-daze">
        Sunny Daze
    </div>

    <div class="column">
        <img src="assets/images/rainbow-dash.png" alt="rainbow-dash">
        Rainbow Dash
    </div>
</div>
<div class="table">
    <div class="column">
        <img src="assets/images/snails.png" alt="snails">
        Snails
    </div>

    <div class="column">
        <img src="assets/images/twilight-sparkle.png" alt="twilight-sparkle">
        Twilight Sparkle
    </div>

    <div class="column">
        <img src="assets/images/pipsqueak.png" alt="pipsqueak">
        Pipsqueak
    </div>
</div>
<div class="table">
    <div class="column">
        <img src="assets/images/blue-moon.png" alt="blue moon">
        Blue Moon
    </div>

    <div class="column">
        <img src="assets/images/silver-spoon.png" alt="silver-spoon">
        Silver Spoon
    </div>

    <div class="column">
        <img src="assets/images/magical-dash.png" alt="magical-dash">
        Magical Dash
    </div>
</div>

</body>
</html>
