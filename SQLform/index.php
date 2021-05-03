<?php
include __DIR__ . "/../PHP/direct-to-logout.php";
$users = include __DIR__ . "/get-users.php";
include __DIR__ . "/errors.php";
$isEDIT = isset($_GET["edit"]);
$id = $_GET["id"] ?? false;
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
    <title>Zadanie 8</title>
</head>
<body>
<?php
include __DIR__ . "/../PHP/logout-button.php"
?>
<h1>
    Tabela członków:
</h1>
<p>
    <span class="pink-color">Fun</span>Clubu!
</p>
<div class="table">
    <div class="title-row row">
        <div class="title-style id-style"> ID:</div>
        <div class="title-style firstname-style"> Imię:</div>
        <div class="title-style lastname-style"> Nazwisko:</div>
        <div class="title-style age-style">Wiek:</div>
    </div>
    <?php
    foreach ($users as $user): ?>
        <form method="post" action="user.php">
            <div class="data-row row">
                <div class="id-style title-block">
                    <?php
                    echo $user->id ?>
                </div>
                <div class="firstname-style">
                    <?php if ($isEDIT === true && $user->id === $id): ?>
                        <input type="text" name="firstname" required value="<?php echo $user->firstname ?>">
                    <?php else: ?>
                        <?php echo $user->firstname ?>
                    <?php endif; ?>
                </div>
                <div class="lastname-style">
                    <?php if ($isEDIT === true && $user->id === $id): ?>
                        <input type="text" name="lastname" required value="<?php echo $user->lastname ?>">
                    <?php else: ?>
                        <?php echo $user->lastname ?>
                    <?php endif; ?>
                </div>
                <div class="age-style">
                    <?php if ($isEDIT === true && $user->id === $id): ?>
                        <input type="number" name="age" min="0" max="100" value="<?php echo $user->age?>">
                    <?php else: ?>
                        <?php echo $user->age ?? "Brak" ?>
                    <?php endif; ?>
                </div>
                <div class = "button-style">
                    <?php if ($isEDIT === true && $user->id === $id): ?>
                        <button type="submit" name="save-user" value="<?php echo $user->id ?>">
                            Zapisz
                        </button>
                        <button type="submit" name="cancel-user" value="<?php echo $user->id ?>">
                            Anuluj
                        </button>
                    <?php else: ?>
                        <button type="submit" name="edit-user" value="<?php echo $user->id ?>">
                            Edytuj
                        </button>
                        <button type="submit" name="delete-user" value="<?php echo $user->id ?>">
                            Usuń
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    <?php
    endforeach; ?>
    <?php
    if ($isEDIT === false): ?>
        <form method="post" action="user.php">
            <div class="data-row row">
                <div class="id-style">?</div>
                <div class="firstname-style"><input type="text" name="firstname" required></div>
                <div class="lastname-style"><input type="text" name="lastname" required></div>
                <div class="age-style"><input type="number" name="age" min="0" max="100"></div>
                <div class = "button-style">
                    <button type="submit" name= "add-user" value="true"> Dodaj</button>
                </div>
            </div>
        </form>
    <?php
    endif; ?>
</div>
</body>
</html>
