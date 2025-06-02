<?php
require_once 'functions.php';
session_start();

// Le mot de passe attendu
const PASSWORD = 'monSuperMotDePasse';

// Saisie utilisateur
$password = filter_input(INPUT_POST, 'password');

if (!empty($_SESSION['error'])) unset($_SESSION['error']);

if ($password && password_verify($password, PASSWORD)) {
    $_SESSION['validPassword'] = true;
    redirect('page2.php');
} else if (!$password && isset($_SERVER['HTTP_REFERER']) && stripos($_SERVER['HTTP_REFERER'], basename(__FILE__))) {
    displayErrorAndRedirect('Merci de vous identifier.', 'page1.php');
} else {
    $_SESSION['error'] = 'Identifiant ou mot de passe incorrect ! Veuillez réessayer.';
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page de connexion</title>
</head>
<body>
    <h1>Connexion requise</h1>
    <?php if (isset($_SESSION['error'])) : ?>
        <p style="color:red"><?= htmlspecialchars($_SESSION['error']); ?></p>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form action="" method="post">
        <label for="password">Mot de passe :</label><br/>
        <input type="password" id="password" name="password"/><br/>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>