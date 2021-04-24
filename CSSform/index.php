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
    <title>Zadanie 3C</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #0b3468;
            text-align: center;
            font-family: 'Amatic SC', cursive;
            color: #e8e5ea;
            font-size: 30px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 50px;
        }

        input,textarea {
            min-height: 25px;
            display: block;
            width: 100%;
            max-width: 100%;
        }

        select {
            padding: 7px;
            display: block;
            width: 100%;
        }

        button {
            font-family: 'Amatic SC', cursive;
            font-size: 35px;
            font-weight: bolder;
            display: block;
            width: 100%;
            padding: 10px;
        }

        .pink-color {
            color: #fd9eff
        }

        .container {
            width: 40%;
            display: flex;
            flex-wrap: wrap;
            margin: auto;
        }

        .row {
            display: flex;
            max-width: 100%;
            padding: 0 0 10px;
            width: 100%;
            align-items: center;
        }

        .column {
            text-align: left;
            width: 100%;
            max-width: 100%;
            padding-right: 20px;
        }

        .column-25 {
            max-width: 25%;
        }

        .column-33 {
            max-width: 33.3%;
        }

        .column-75 {
            max-width: 75%;
        }

        .no-padding {
            padding-right: 0;
        }

        .checkbox {
            display: inline-block;
            width: auto;
        }
    </style>
</head>
<body>
<?php
include __DIR__."/../PHP/logout-button.php"
?>
<h1>
    Zapisz się do <span class="pink-color">Fun</span>Clubu!
</h1>
<form class="container" action="" method="post">
    <div class="row">
        <div class="column column-25">
            <label for="name">
                Imię:
            </label>
        </div>
        <div class="column column-25">
            <input type="text" id="name" name="name">
        </div>
        <div class="column column-25">
            <label for="surname">
                Nazwisko:
            </label>
        </div>
        <div class="column column-25">
            <input type="text" id="surname" name="surname">
        </div>
    </div>
    <div class="row">
        <div class="column column-25">
            <label for="city-name">
                Miasto:
            </label></div>
        <div class="column column-25"><input type="text" id="city-name" name="city-name"></div>
        <div class="column column-25">
            <label for="postal-code">
                Kod pocztowy:
            </label></div>
        <div class="column column-25"><input type="text" id="postal-code" placeholder="__-___" name="postal-code"></div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="street-name">
                Ulica:
            </label>
        </div>
        <div class="column column-75">
            <input type="text" id="street-name" name="street-name">
        </div>
    </div>
    <div class="row">
        <div class="column column-25">
            <label for="building-number">
                Numer budynku:
            </label>
        </div>
        <div class="column column-25">
            <input type="text" id="building-number" name="building-number">
        </div>
        <div class="column column-25">
            <label for="flat-number">
                Numer mieszkania:
            </label>
        </div>
        <div class="column column-25">
            <input type="text" id="flat-number" name="flat-number">
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="voivodeship">
                Województwo:
            </label>
        </div>
        <div class="column column-25">
            <select name="voivodeship" id="voivodeship">
                <option disabled selected>Wybierz z listy...</option>
                <option value="dolnośląskie">Dolnośląskie</option>
                <option value="kujawsko-pomorskie">Kujawsko-pomorskie</option>
                <option value="lubelskie">Lubelske</option>
                <option value="lubuskie">Lubuskie</option>
                <option value="łódzkie">Łódzkie</option>
                <option value="małopolskie">Małopolskie</option>
                <option value="mazowieckie">Mazowieckie</option>
                <option value="opolskie">Opolskie</option>
                <option value="podkarpackie">Podkarpackie</option>
                <option value="podlaskie">Podlaskie</option>
                <option value="pomorskie">Pomorskie</option>
                <option value="śląskie">Śląskie</option>
                <option value="świętokrzyskie">Świętokrzyskie</option>
                <option value="warmińsko-mazurskie">Warmińsko-mazurskie</option>
                <option value="wielkopolskie">Wielkopolskie</option>
                <option value="zachodniopomorskie">Zachodniopomorskie</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="driver-license">
                Prawo jazdy:
            </label>
        </div>
        <div class="column column-25">
            <input type="checkbox" class="checkbox" id="driver-license">
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <p>
                Płeć:
            </p>
        </div>
        <div class="column column-25">
            <input type="radio" id="women" name="sex" class="checkbox">
            <label for="women"><span class="pink-color">Kobieta</span></label><br>
            <input type="radio" id="men" name="sex" class="checkbox">
            <label for="men">Mężczyzna</label><br>
            <input type="radio" id="different" name="sex" class="checkbox">
            <label for="different">Inne</label><br>
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="telephone-number">
                Numer telefonu:
            </label>
        </div>
        <div class="column column-25">
            <input type="text" id="telephone-number" name="telephone-number" placeholder="+48_________">
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="birth-date">
                Data urodzenia:
            </label>
        </div>
        <div class="column column-25">
            <input type="date" id="birth-date">
        </div>
    </div>
    <div class="row">
        <div class="column column-25 no-padding">
            <label for="password">
                Hasło:
            </label>
        </div>
        <div class="column column-25">
            <input type="password" id="password" name="password">
        </div>
    </div>
    <div class="row">
        <div class="column">
            <textarea name="feedback" rows="10" cols="100%" placeholder="Uwagi..."></textarea>
        </div>
    </div>
    <div class="row">
        <div class="column column-33">
            <button type="submit">Wyślij</button>
        </div>
        <div class="column column-33">
            <button type="reset">Wyczyść</button>
        </div>
        <div class="column column-33">
            <button type="button">Przycisk nr3</button>
        </div>
    </div>
</form>
</body>
</html>
