<?php
require_once 'functions.php';
session_start();

// Le mot de passe attendu
const PASSWORD = 'monSuperMotDePasse';

if (!isset($_SESSION['validPassword']) || !$_SESSION['validPassword']) {
    displayErrorAndRedirect('Merci de vous identifier.', 'page1.php');
}

// Suppression de la variable de session validPassword
unset($_SESSION['validPassword']);

// Contrôle du mot de passe
if ('monSuperMotDePasse' !== PASSWORD) {
    displayErrorAndRedirect('Accès refusé ! Mot de passe invalide.', 'page1.php');
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Page 3</title>
</head>
<body>
    <h1>Bienvenue sur la page 3</h1>
    <p>Ce contenu ne peut être vu que lorsqu'on connaît le mot de passe.</p>
    <p><a href="page1.php">&lt;&lt; Revenir à l'accueil</a></p>
</body>
</html>