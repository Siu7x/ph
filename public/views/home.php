<?php
// On inclut la connexion à la base de données
// Note : on remonte de deux niveaux pour atteindre le dossier models
require_once "../../models/db.php";

// Démarrage de la session pour savoir si l'utilisateur est connecté
session_start();

// Requête pour récupérer les articles du plus récent au plus ancien
// On récupère aussi le nom de l'auteur (username) via une jointure
$query = "SELECT article.*, user.username 
          FROM article 
          LEFT JOIN user ON article.auteur_id = user.id 
          ORDER BY article.date_publication DESC";

$result = $mysqli->query($query);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - PHP Shop</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        header { display: flex; justify-content: space-between; align-items: center; background: #333; color: white; padding: 10px 20px; border-radius: 8px; }
        nav a { color: white; margin-left: 15px; text-decoration: none; }
        .container { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; margin-top: 20px; }
        .card { background: white; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; }
        .card img { max-width: 100%; height: 150px; object-fit: cover; border-radius: 4px; }
        .price { color: #27ae60; font-weight: bold; font-size: 1.2em; }
        .btn-detail { display: inline-block; margin-top: 10px; padding: 8px 15px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>

<header>
    <h1>Ma Boutique PHP</h1>
    <nav>
        <?php if(isset($_SESSION['user_id'])): ?>
            <span>Bonjour, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong> (Solde: <?php echo $_SESSION['solde']; ?>€)</span>
            <a href="vente.php">Vendre</a>
            <a href="cart.php">Panier</a>
            <a href="logout.php">Déconnexion</a>
        <?php else: ?>
            <a href="login.php">Conion</a>
            <a href="register.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>

<h2>Derniers articles en vente</h2>

<div class="container">
    <?php if ($result && $result->num_rows > 0): ?>
        <?php while($article = $result->fetch_assoc()): ?>
            <div class="card">
                <?php 
                    $imagePath = !empty($article['image']) ? "../assets/uploads/" . $article['image'] : "../assets/uploads/default.png";
                ?>
                <img src="<?php echo $imagePath; ?>" alt="<?php echo htmlspecialchars($article['nom']); ?>">
                
                <h3><?php echo htmlspecialchars($article['nom']); ?></h3>
                <p class="price"><?php echo number_format($article['prix'], 2); ?> €</p>
                <p><small>Vendu par : <?php echo htmlspecialchars($article['username'] ?? 'Inconnu'); ?></small></p>
                
                <a href="detail.php?id=<?php echo $article['id']; ?>" class="btn-detail">Voir le détail</a>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Aucun article n'est en vente pour le moment.</p>
    <?php endif; ?>
</div>

</body>
</html>