<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails - LOKE</title>
    <link rel="stylesheet" href="../css/shop.css"> <style>
        /* Styles spécifiques à la page détail pour coller à ton image */
        .detail-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 20px;
        }
        .detail-img {
            background-color: #d1d5db;
            border-radius: 12px;
            height: 400px;
        }
        .detail-info h1 { font-size: 2.5rem; margin-bottom: 10px; }
        .detail-price { font-size: 1.8rem; color: #2563eb; font-weight: bold; margin-bottom: 20px; }
        .detail-desc { color: #4b5563; line-height: 1.6; margin-bottom: 30px; }
        
        @media (max-width: 768px) {
            .detail-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header class="main-header">
        <div class="container flex-header">
            <a href="home.php" class="logo">LOKE</a>
            <nav class="nav-links">
                <a href="home.php">Accueil</a>
                <a href="shop.php">Boutique</a>
                <a href="account.php">Mon Compte</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero-account">
            <h1>Fiche de l'animal</h1>
            <p>Découvrez toutes les informations sur votre futur compagnon.</p>
        </section>

        <div class="info-banner">
            <strong>Info IA :</strong> Cet animal correspond à 98% à vos critères de recherche basés sur vos dernières visites.
        </div>

        <div class="detail-container">
            <div class="detail-img"></div>

            <div class="detail-info">
                <h1>Golden Retriever</h1>
                <p class="detail-price">850 €</p>
                
                <p class="detail-desc">
                    Le Golden Retriever est un chien de famille par excellence. Très affectueux, intelligent et protecteur, 
                    il saura combler de bonheur petits et grands. Nos animaux sont tous vaccinés et pucés avant adoption.
                </p>

                <div class="info-group">
                    <label>Âge :</label>
                    <p>3 mois</p>
                </div>
                <div class="info-group">
                    <label>Race :</label>
                    <p>Pure race (LOF)</p>
                </div>

                <a href="cart.php?add=1" class="btn-loke">Ajouter au panier</a>
                <a href="shop.php" style="display: block; text-align: center; margin-top: 15px; color: #6b7280; text-decoration: none; font-size: 0.9rem;">
                     Retour à la boutique
                </a>
            </div>
        </div>
    </main>

    <footer>
        <p>©2026 LOKE</p>
    </footer>

</body>
</html>