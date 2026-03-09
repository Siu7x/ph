<?php
// 1. Connexion à la base de données
require_once('../../config/db.php');

try {
    $query = $pdo->query("SELECT * FROM animals");
    $animals = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error = "Erreur lors de la récupération des données.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - LOKE</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js" defer></script>
</head>
<body>

    <nav class="navbar">
        <div class="container flex-nav">
            <a href="home.php" class="logo">LOKE</a>
            <ul class="nav-links">
                <li><a href="home.php">Accueil</a></li>
                <li><a href="shop.php" class="active">Boutique</a></li>
                <li><a href="account.php">Mon Compte</a></li>
            </ul>
        </div>
    </nav>

    <main class="container">
        <header class="page-header">
            <h1>Nos Animaux</h1>
            <p>Trouvez le compagnon idéal parmi nos catégories.</p>
        </header>

        <div class="filters">
            <button class="filter-btn active" data-type="all">Tous</button>
            <button class="filter-btn" data-type="chien">Chiens</button>
            <button class="filter-btn" data-type="chat">Chats</button>
        </div>

        <div class="grid" id="product-grid">
            
            <?php if (!empty($animals)): ?>
                <?php foreach ($animals as $animal): ?>
                    <article class="card" data-category="<?= htmlspecialchars(strtolower($animal['type'])) ?>">
                        <div class="img-placeholder">
                            </div>
                        <div class="card-body">
                            <span class="category-tag"><?= htmlspecialchars($animal['type']) ?></span>
                            <h3><?= htmlspecialchars($animal['nom']) ?></h3>
                            <p class="price"><?= number_format($animal['prix'], 2, ',', ' ') ?> €</p>
                            <a href="cart.php?add=<?= $animal['id'] ?>" class="btn">Ajouter au panier</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun animal n'est disponible pour le moment.</p>
            <?php endif; ?>

        </div>
    </main>

    <footer>
        <p>&copy; 2026 LOKE - Boutique officielle</p>
    </footer>

</body>
</html>