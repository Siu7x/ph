<?php require_once "header.php"; require_once "../../models/db.php";
$u_id = $_SESSION['user_id'];

// Calcul du total
$res = $mysqli->query("SELECT SUM(article.prix) as total FROM cart JOIN article ON cart.article_id = article.id WHERE user_id = $u_id");
$total = $res->fetch_assoc()['total'];

if ($_SESSION['solde'] >= $total && $total > 0) {
    // 1. Déduire le solde
    $mysqli->query("UPDATE user SET solde = solde - $total WHERE id = $u_id");
    $_SESSION['solde'] -= $total;
    
    // 2. Créer la facture (Exemple simplifié)
    $stmt = $mysqli->prepare("INSERT INTO invoice (user_id, montant, adresse) VALUES (?, ?, 'Adresse test')");
    $stmt->bind_param("id", $u_id, $total);
    $stmt->execute();
    
    // 3. Vider le panier
    $mysqli->query("DELETE FROM cart WHERE user_id = $u_id");
    
    echo "<h2>Achat réussi ! Votre nouveau solde est de ".$_SESSION['solde']."€</h2>";
} else {
    echo "<h2>Solde insuffisant ou panier vide.</h2>";
}
?>