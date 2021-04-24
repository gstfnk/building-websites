<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <title>Gstfnk</title>
</head>
<body>
<form method="post" action="/logout.php">
    <button type="submit" id="logout"> Wyloguj się</button>
</form>
<div class="form-back">
    <h1>
        Twoje dane do <span class="pink-color">Fun</span>Clubu!
    </h1>
    <form class="container" action="data.php" method="post" id="funClubForm">
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="name">
                    Imię:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <?php
                echo $_POST["name"] ?? "" ?>
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="surname">
                    Nazwisko:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <?php
                echo $_POST["surname"] ?? "" ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="city-name">
                    Miasto:
                </label></div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["city-name"] ?? "" ?>
                </div>
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="postal-code">
                    Kod pocztowy:
                </label></div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["postal-code"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="street-name">
                    Ulica:
                </label>
            </div>
            <div class="column column-75 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["street-name"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="building-number">
                    Numer budynku:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["building-number"] ?? "" ?>
                </div>
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="flat-number">
                    Numer mieszkania:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["flat-number"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding">
                <label for="voivodeship">
                    Województwo:
                </label>
            </div>
            <div class="column column-25">
                <div>
                    <?php
                    echo $_POST["voivodeship"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding">
                <label for="driver-license">
                    Prawo jazdy:
                </label>
            </div>
            <div class="column column-25 flex-label">
                <div>
                    <?php
                    $hasDriverLicense = (bool) ($_POST["driver-license"] ?? false);
                    if ($hasDriverLicense) {
                        echo("Tak, posiadam");
                    } else {
                        echo("Nie posiadam");
                    } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding">
                <p>
                    Płeć:
                </p>
            </div>
            <div class="column column-25">
                <div>
                    <?php
                    $sex = $_POST["sex"] ?? "";
                    switch ($sex) {
                        case "women":
                            echo("Kobieta");
                            break;
                        case "men":
                            echo("Mężczyzna");
                            break;
                        case "different":
                            echo("Inne");
                            break;
                        default:
                            echo("");
                            break;
                    } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="telephone-number">
                    Numer telefonu:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["telephone-number"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="birth-date">
                    Data urodzenia:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["birth-date"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="password">
                    Hasło:
                </label>
            </div>
            <div class="column column-25 label-padding-bottom">
                <div>
                    <?php
                    echo $_POST["password"] ?? "" ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column label-padding-bottom">
                <div>Uwagi:</div>
                <div>
                    <?php
                    echo $_POST["feedback"] ?? "" ?>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

