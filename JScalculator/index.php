<?php
include __DIR__."/../PHP/direct-to-logout.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>Zadanie 3</title>
</head>
<body>
<?php
include __DIR__."/../PHP/logout-button.php"
?>
<h1>
    Oblicz razem z <span class="pink-color">Fun</span>Culatorem!
</h1>
<div class="calculator-grid">
    <div class="results">
        <div data-previous-result-event class="previous-result"></div>
        <div data-current-result-event class="current-result"></div>
    </div>
    <button data-all-clear-event class="button-grid button-grid-letter">AC</button>
    <button data-clear-event class="button-grid button-grid-letter">C</button>
    <button data-delete-event class="button-grid button-grid-letter">DEL</button>
    <button data-operation-event class="button-grid">÷</button>
    <button data-number-event class="button-grid">1</button>
    <button data-number-event class="button-grid">2</button>
    <button data-number-event class="button-grid">3</button>
    <button data-operation-event class="button-grid">*</button>
    <button data-number-event class="button-grid">4</button>
    <button data-number-event class="button-grid">5</button>
    <button data-number-event class="button-grid">6</button>
    <button data-operation-event class="button-grid">+</button>
    <button data-number-event class="button-grid">7</button>
    <button data-number-event class="button-grid">8</button>
    <button data-number-event class="button-grid">9</button>
    <button data-operation-event class="button-grid">-</button>
    <button data-number-event class="button-grid">.</button>
    <button data-number-event class="button-grid">0</button>
    <button data-result-event class="button-grid double-column">=</button>
</div>
</body>
</html>
