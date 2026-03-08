<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>PHP Shop</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
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
            <a href="login.php">Connexion</a>
            <a href="register.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>