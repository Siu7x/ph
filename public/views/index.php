<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Shop</title>
    <style>
        body { font-family: Arial; margin: 20px; line-height: 1.6; }
        nav { background: #333; padding: 10px; color: white; margin-bottom: 20px; }
        nav a { color: white; margin-right: 15px; text-decoration: none; }
        .error { color: red; } .success { color: green; }
        .grid { display: flex; gap: 20px; flex-wrap: wrap; }
        .card { border: 1px solid #ddd; padding: 15px; width: 200px; border-radius: 8px; }
    </style>
</head>
<body>
<nav>
    <a href="home.php">Accueil</a>
    <?php if(isset($_SESSION['user_id'])): ?>
        <a href="vente.php">Vendre</a>
        <a href="cart.php">Panier</a>
        <span>| Bienvenue <b><?php echo $_SESSION['username']; ?></b> (<?php echo $_SESSION['solde']; ?>€)</span>
        <a href="logout.php" style="float:right">Déconnexion</a>
    <?php else: ?>
        <a href="login.php">Connexion</a>
        <a href="register.php">Inscription</a>
    <?php endif; ?>
</nav>