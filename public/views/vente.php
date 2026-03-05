<?php require_once "header.php"; require_once "../../models/db.php";
if(!isset($_SESSION['user_id'])) header("Location: login.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $img = time()."_".$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../assets/uploads/".$img);
    
    $stmt = $mysqli->prepare("INSERT INTO article (nom, description, prix, auteur_id, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdis", $_POST['nom'], $_POST['desc'], $_POST['prix'], $_SESSION['user_id'], $img);
    $stmt->execute();
    echo "<p class='success'>Article publié !</p>";
}
?>
<form method="POST" enctype="multipart/form-data">
    <h2>Vendre un article</h2>
    <input type="text" name="nom" placeholder="Nom" required><br>
    <textarea name="desc" placeholder="Description"></textarea><br>
    <input type="number" step="0.01" name="prix" placeholder="Prix" required><br>
    <input type="file" name="image" required><br>
    <button type="submit">Publier</button>
</form>