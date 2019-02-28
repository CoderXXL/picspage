<?php
/**
 * Created by PhpStorm.
 * User: dario_lang
 * Date: 28.02.19
 * Time: 13:46
 */

$pdo = new PDO('mysql:host=localhost;dbname=admin_', 'root', 'fU564k*v');

$sql = "SELECT email, vorname, nachname FROM users";
foreach ($pdo->query($sql) as $row) {
    echo $row['vorname']." ".$row['nachname'].PHP_EOL;
    echo "E-Mail: ".$row['email']."<br /><br />";
}



?>