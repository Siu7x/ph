<?php require_once "header.php"; require_once "../../models/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $res = $mysqli->query("SELECT * FROM user WHERE email = '".$_POST['email']."'");
    $user = $res->fetch_assoc();
    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['solde'] = $user['solde'];
        header("Location: home.php");
    } else echo "<p class='error'>Identifiants invalides</p>";
}
?>
<form method="POST">
    <h2>Connexion</h2>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Mot de passe" required><br>
    <button type="submit">Se connecter</button>
</form>