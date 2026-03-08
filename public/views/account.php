<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - LOKE</title>
    <link rel="stylesheet" href="../css/account.css">
</head>
<body>

    <header class="main-header">
        <div class="container flex-header">
            <div class="logo">LOKE</div>
            <nav class="nav-links">
                <a href="home.php">Accueil</a>
                <a href="shop.php">Boutique</a>
                <a href="account.php" class="active">Mon Compte</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="hero-section">
            <h1>Mon Espace Client</h1>
            <p>Gérez vos informations et vos adoptions en un clic.</p>
        </section>

        <div class="account-grid">
            
            <article class="card">
                <div class="card-img-placeholder"></div>
                <div class="card-content">
                    <h3>Mes Informations</h3>
                    <p><strong>Nom :</strong> Alexandre Dupont</p>
                    <p><strong>Email :</strong> alex@loke.fr</p>
                    <a href="#" class="btn-loke">Modifier le profil</a>
                </div>
            </article>

            <article class="card">
                <div class="card-img-placeholder"></div>
                <div class="card-content">
                    <h3>Dernière Adoption</h3>
                    <p>Golden Retriever</p>
                    <p class="price">En attente de validation</p>
                    <a href="#" class="btn-loke">Suivre mon colis</a>
                </div>
            </article>

            <article class="card">
                <div class="card-img-placeholder"></div>
                <div class="card-content">
                    <h3>Assistance</h3>
                    <p>Besoin d'aide pour votre animal ?</p>
                    <p>Réponse en moins de 24h.</p>
                    <a href="#" class="btn-loke">Contacter le SAV</a>
                </div>
            </article>

        </div>
    </main>

    <footer class="main-footer">
        <p>©2026 LOKE</p>
    </footer>

</body>
</html>