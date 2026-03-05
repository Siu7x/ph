<?php require_once "header.php"; require_once "../../models/db.php";
$articles = $mysqli->query("SELECT * FROM article ORDER BY date_publication DESC");
?>
<h2>Derniers articles</h2>
<div class="grid">
    <?php while($a = $articles->fetch_assoc()): ?>
    <div class="card">
        <img src="../assets/uploads/<?php echo $a['image']; ?>" width="100%">
        <h4><?php echo htmlspecialchars($a['nom']); ?></h4>
        <p>Prix : <b><?php echo $a['prix']; ?> €</b></p>
        <a href="detail.php?id=<?php echo $a['id']; ?>">Voir plus</a>
    </div>
    <?php endwhile; ?>
</div>