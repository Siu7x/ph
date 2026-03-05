<?php
require_once "../../models/db.php";
include "header.php"; // On appelle le menu ici !

$query = "SELECT article.*, user.username FROM article LEFT JOIN user ON article.auteur_id = user.id ORDER BY article.date_publication DESC";
$result = $mysqli->query($query);
?>

<h2>Derniers articles en vente</h2>

<div class="container">
    </div>

</body>
</html>