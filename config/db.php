<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "php_exam";

$mysqli = new mysqli($host, $user, $pass, $dbname);

if ($mysqli->connect_error) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}
?>