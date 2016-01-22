<?php
//Credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'babysitters';

//Create connection
$db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());


<?php
$host = 'sql.hosted.hro.nl';
$user = '0920348';
$password = 'shaezahf';
$database = '0920348';

//Create connection
$db = mysqli_connect($host, $user, $password, $database) or die("Error: " . mysqli_connect_error());


<input type="checkbox" name="voorwaarde" value="ok"
<?php
        if ($voorwaarde === 'ok'){
            echo 'checked';
        }
        ?>


<?= $_SERVER['REQUEST_URI']; ?>
