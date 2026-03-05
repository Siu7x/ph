<?php require_once "header.php"; require_once "../../models/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt = $mysqli->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $_POST['username'], $_POST['email'], $pass);
    if($stmt->execute()) header("Location: login.php");
    else echo "<p class='error'>Erreur (Email/Pseudo déjà pris)</p>";
}
?>
<form method="POST">
    <h2>Inscription</h2>
    <input type="text" name="username" placeholder="Pseudo" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit">S'inscrire</button>
</form>