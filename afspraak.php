<?php
//Credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'babysitters';

//Create connection
$db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());

if (isset($_POST['submit'])) {
    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $surname = mysqli_real_escape_string($db, $_POST['surname']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $adres = mysqli_real_escape_string($db, $_POST['adres']);
    $zip = mysqli_real_escape_string($db, $_POST['zip']);
    $kids = mysqli_real_escape_string($db, $_POST['kids']);
    $info = mysqli_real_escape_string($db, $_POST['info']);
    $datum = mysqli_real_escape_string($db, $_POST['datum']);

    //Check if data is valid & generate error if not so
    $errors = [];
    if ($surname == "") {
        $errors[] = 'Voornaam is niet ingevuld';
    }
    if ($firstname == "") {
        $errors[] = 'Achternaam is niet ingevuld';
    }
    if ($mail == "") {
        $errors[] = 'E-mail is niet ingevuld';
    }
    if ($adres == "") {
        $errors[] = 'Adres is niet ingevuld';
    }
    if ($zip == "") {
        $errors[] = 'Postcode is niet ingevuld';
    }
    if ($kids == "") {
        $errors[] = 'Aantal kinderen is niet ingevuld';
    }
    if ($info == "") {
        $errors[] = 'Aantal kinderen is niet ingevuld';
    }
    if ($datum == "") {
        $errors[] = 'Datum is niet ingevuld';
    }

    if(!isset($errors)){
        $query = "INSERT INTO afspraak (surname,firstname,mail,adres,zip,kids,info,datum)
            VALUES ('$surname','$firstname','$mail','$adres','$zip','$kids','$info','$datum')";
        if (!mysqli_query($db, $query)) {
            die('Error ' . mysqli_error($db));
        }
        echo "Uw afspraak is gepland";

        mysqli_close($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BabyZitters</title>
</head>
<link rel="stylesheet" href="afspraak.css"/>
<body>
<div class="container">
    <article>
        <h1>Afspraak Formulier</h1>
        <?php if (isset($errors)) { ?>
            <ul class="errors">
                <?php for ($i = 0; $i < count($errors); $i++) { ?>
                    <li><?= $errors[$i]; ?></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </article>

    <form action="bedankt.php" method="post">
        *verplicht
        <div class="data-field">
            <label for="surname">Achternaam*</label>
            <input id="surname" type="text" name="surname" value="<?= (isset($surname) ? $surname : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="firstname">Voornaam*</label>
            <input id="firstname" type="text" name="firstname" value="<?= (isset($firstname) ? $firstname : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="mail">E-mail*</label>
            <input id="mail" type="text" name="mail" value="<?= (isset($mail) ? $mail : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="adres">Adres*</label>
            <input id="adres" type="text" name="adres" value="<?= (isset($adres) ? $adres : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="zip">Postcode*</label>
            <input id="zip" type="text" name="zip" value="<?= (isset($zip) ? $zip : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="kids">Aantal Kinderen*</label>
            <input id="kids" type="text" name="kids" value="<?= (isset($kids) ? $kids : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="info">Notities Kind(eren)*</label>
            <input id="info" type="text" name="info" value="<?= (isset($info) ? $info : ''); ?>"/>
        </div>
        <div class="data-field">
            <label for="datum">Datum*</label>
            <input id="datepicker" type="text" name="datum" value="<?= (isset($datum) ? $datum : ''); ?>"/>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script>
                $(function() {
                    $( "#datepicker" ).datepicker({dateFormat: 'yymmdd'});
                });
            </script>
            </div>


<!--            <p>Date: <input type="text" id="datepicker"></p>-->
        <br><br><br>
        <div class="data-submit">
            <input type="submit" name="submit" value="Verzenden"/>
        </div>
    </form>
</div>
</body>
</html>

