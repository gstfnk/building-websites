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
    <title>Zadanie 2C</title>
    <style>
        body {
            background-color: #0b3468;
            text-align: center;
            font-family: 'Amatic SC', cursive;
            color: #e8e5ea;
            font-size: 30px;
        }

        h1{
            margin-bottom: 20px;
            font-size: 50px;
        }

        table {
            margin: auto;
            text-align: left;
            border-collapse:separate;
            border-spacing: 10px;
        }
        td{
            padding: 0;
        }
        input {
            min-height: 25px;
            display: block;
            width: 90%
        }
        select{
            padding: 7px;
            display: block;
            width: 95%;
        }
        button{
            font-family: 'Amatic SC', cursive;
            font-size: 35px;
            font-weight: bolder;
            display: block;
            width: 100%;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
include __DIR__."/../PHP/logout-button.php"
?>
<h1>
    Zapisz się do <span style="color: #fd9eff">Fun</span>Clubu!
</h1>
<form action="" method="post">
    <table>
        <tbody>
        <tr>
            <td>
                <label for="name">
                    Imię:
                </label>
            </td>
            <td>
                <input type="text" id="name" name="name">
            </td>
            <td>
                <label for="surname">
                    Nazwisko:
                </label>
            </td>
            <td>
                <input type="text" id="surname" name="surname">
            </td>
        </tr>
        <tr>
            <td>
                <label for="city-name">
                    Miasto:
                </label>
            </td>
            <td>
                <input type="text" id="city-name" name="city-name">
            </td>
            <td>
                <label for="postal-code">
                    Kod pocztowy:
                </label>
            </td>
            <td>
                <input type="text" id="postal-code" placeholder="__-___" name="postal-code">
            </td>
        </tr>
        <tr>
            <td>
                <label for="street-name">
                    Ulica:
                </label>
            </td>
            <td colspan="3">
                <input type="text" id="street-name" name="street-name" style="width: 97%">
            </td>
        </tr>
        <tr>
            <td>
                <label for="building-number">
                    Numer budynku:
                </label>
            </td>
            <td>
                <input type="text" id="building-number" name="building-number">
            </td>
            <td>
                <label for="flat-number">
                    Numer mieszkania:
                </label>
            </td>
            <td>
                <input type="text" id="flat-number" name="flat-number">
            </td>
        </tr>
        <tr>
            <td>
                <label for="voivodeship">
                    Województwo:
                </label>
            </td>
            <td>
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
            </td>
        </tr>
        <tr>
            <td>
                <label for="driver-license">
                    Prawo jazdy:
                </label>
            </td>
            <td>
                <input type="checkbox" id="driver-license" style="display: inline-block;width: auto">
            </td>
        </tr>
        <tr>
            <td>
                <p>
                    Płeć:
                </p>
            </td>
            <td>
                <input type="radio" id="women" name="sex" style="display: inline-block;width: auto">
                <label for="women"><span style="color: #fd9eff">Kobieta</span></label><br>
                <input type="radio" id="men" name="sex" style="display: inline-block;width: auto">
                <label for="men">Mężczyzna</label><br>
                <input type="radio" id="different" name="sex" style="display: inline-block;width: auto">
                <label for="different">Inne</label><br>
            </td>
        </tr>
        <tr>
            <td>
                <label for="telephone-number">
                    Numer telefonu:
                </label>
            </td>
            <td>
                <input type="text" id="telephone-number" name="telephone-number" placeholder="+48_________">
            </td>
        </tr>
        <tr>
            <td>
                <label for="birth-date">
                    Data urodzenia:
                </label>
            </td>
            <td>
                <input type="date" id="birth-date">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">
                    Hasło:
                </label>
            </td>
            <td>
                <input type="password" id="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <textarea name="feedback" rows="10" cols="100%" placeholder="Uwagi..."></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Wyślij</button>
            </td>
            <td>
                <button type="reset">Wyczyść</button>
            </td>
            <td colspan="2">
                <button type="button">Przycisk nr3</button>
            </td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>
