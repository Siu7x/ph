<?php
// 1. On démarre la session pour pouvoir y accéder
session_start();

// 2. On vide toutes les variables de session
$_SESSION = array();

// 3. On détruit physiquement la session sur le serveur
session_destroy();

// 4. On redirige vers l'accueil (home.php)
header("Location: home.php");
exit();
?>