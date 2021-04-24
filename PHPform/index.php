<?php
include __DIR__."/../PHP/direct-to-logout.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b5017807ed.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 7</title>
</head>
<body>
<?php
include __DIR__."/../PHP/logout-button.php"
?>
<div class="form-back">
    <h1>
        Zapisz się do <span class="pink-color">Fun</span>Clubu!
    </h1>
    <form class="container" action="data.php" method="post" id="funClubForm">
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="name">
                    Imię:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="text" id="name" name="name">
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="surname">
                    Nazwisko:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="text" id="surname" name="surname">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="city-name">
                    Miasto:
                </label></div>
            <div class="column column-25 form-control">
                <input type="text" id="city-name" name="city-name">
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="postal-code">
                    Kod pocztowy:
                </label></div>
            <div class="column column-25 form-control">
                <input type="text" id="postal-code" placeholder="__-___" name="postal-code">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="street-name">
                    Ulica:
                </label>
            </div>
            <div class="column column-75 form-control">
                <input type="text" id="street-name" name="street-name">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 label-padding-bottom">
                <label for="building-number">
                    Numer budynku:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="text" id="building-number" name="building-number">
            </div>
            <div class="column column-25 label-padding-bottom">
                <label for="flat-number">
                    Numer mieszkania:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="text" id="flat-number" name="flat-number">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding">
                <label for="voivodeship">
                    Województwo:
                </label>
            </div>
            <div class="column column-25 form-control">
                <select name="voivodeship" id="voivodeship">
                    <option value="">Wybierz z listy...</option>
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
            <div class="column column-25 flex-label">
                <input type="checkbox" class="checkbox" id="driver-license" name="driver-license">
                <label for="driver-license" class="label-padding-left">Tak, posiadam</label>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding">
                <p>
                    Płeć:
                </p>
            </div>
            <div class="column column-25 form-control">
                <div class="flex-label">
                    <input type="radio" id="women" value="women" name="sex" class="checkbox">
                    <label for="women"><span class="pink-color label-padding-left">Kobieta</span></label><br>
                </div>
                <div class="flex-label">
                    <input type="radio" id="men" value="men" name="sex" class="checkbox flex-label">
                    <label for="men" class="label-padding-left">Mężczyzna</label><br>
                </div>
                <div class="flex-label">
                    <input type="radio" id="different" value="different" name="sex" class="checkbox">
                    <label for="different" class="label-padding-left">Inne</label><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="telephone-number">
                    Numer telefonu:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="text" id="telephone-number" name="telephone-number" placeholder="123456789">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="birth-date">
                    Data urodzenia:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="date" id="birth-date" name="birth-date">
            </div>
        </div>
        <div class="row">
            <div class="column column-25 no-padding label-padding-bottom">
                <label for="password">
                    Hasło:
                </label>
            </div>
            <div class="column column-25 form-control">
                <input type="password" id="password" name="password" placeholder="8-20 znaków">
            </div>
        </div>
        <div class="row">
            <div class="column form-control">
                <label>
                    <textarea id="feedback" name="feedback" rows="10" cols="100%"
                              placeholder="Maksymalna ilość znaków: 250"
                              class="textarea-padding"></textarea>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="column column-33">
                <button type="submit" id="submitClick">Wyślij</button>
            </div>
            <div class="column column-33">
                <button type="reset">Wyczyść</button>
            </div>
            <div class="column column-33">
                <button type="button">Klikacz</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
