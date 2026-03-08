<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOKE - Animalerie</title>
    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js" defer></script>
</head>
<body>

    <nav class="navbar">
        <div class="container flex-nav">
            <a href="home.php" class="logo">LOKE</a>
            <ul class="nav-links">
                <li><a href="home.php">Accueil</a></li>
                <li><a href="shop.php">Boutique</a></li>
                <li><a href="account.php">Mon Compte</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1>Trouvez votre futur compagnon</h1>
            <p>Le réseau national de 12 agences spécialisées.</p>
            <form action="shop.php" class="search-simple">
                <input type="text" placeholder="Rechercher un animal...">
                <button type="submit">Go</button>
            </form>
        </div>
    </header>

    <main class="container">
        <section class="info-tag">
        </section>

        <div class="grid">
            <article class="card">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <h3>Golden Retriever</h3>
                    <p>850 €</p>
                    <a href="detail.php?id=1" class="btn">Voir plus</a>
                </div>
            </article>

            <article class="card">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <h3>Chat de Bengal</h3>
                    <p>1200 €</p>
                    <a href="#" class="btn">Voir plus</a>
                </div>
            </article>

            <article class="card">
                <div class="img-placeholder"></div>
                <div class="card-body">
                    <h3>Perroquet Ara</h3>
                    <p>500 €</p>
                    <a href="#" class="btn">Voir plus</a>
                </div>
            </article>
        </div>
    </main>

    <footer>
        <p>&copy;2026 LOKE</p>
    </footer>

</body>
</html>