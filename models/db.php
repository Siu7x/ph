<?php
// models/db.php

$host = "localhost";
$user = "root";
$pass = "root"; // Si erreur, remplace par "" 
$dbname = "php_exam"; // Nom de ta base de données [cite: 159]

$mysqli = new mysqli($host, $user, $pass, $dbname);

// Optionnel mais recommandé : vérifier la connexion
if ($mysqli->connect_error) {
    die("Échec de la connexion : " . $mysqli->connect_error);
}
?>