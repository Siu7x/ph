<?php require_once "header.php"; require_once "../../models/db.php";
if(!isset($_SESSION['user_id'])) header("Location: login.php");

if(isset($_GET['add'])) {
    $mysqli->query("INSERT INTO cart (user_id, article_id) VALUES (".$_SESSION['user_id'].", ".$_GET['add'].")");
    header("Location: cart.php");
}

$u_id = $_SESSION['user_id'];
$res = $mysqli->query("SELECT cart.id as cid, article.* FROM cart JOIN article ON cart.article_id = article.id WHERE cart.user_id = $u_id");
$total = 0;
?>
<h2>Mon Panier</h2>
<?php while($item = $res->fetch_assoc()): $total += $item['prix']; ?>
    <p><?php echo $item['nom']; ?> - <?php echo $item['prix']; ?>€</p>
<?php endwhile; ?>
<hr>
<h3>Total : <?php echo $total; ?> €</h3>
<?php if($total > 0): ?>
    <a href="validate.php">Valider l'achat</a>
<?php endif; ?>