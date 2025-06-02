<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Date et heure courante - Dernière visite (30 sec)</title>
</head>
<body>
    <h1>Date et Heure Courantes</h1>
    <p><?= date('d/m/Y H:i:s') ?></p>
    
    <?php
    // Récupération de la dernière visite depuis le cookie
    $lastVisit = isset($_COOKIE['last_visit']) ? $_COOKIE['last_visit'] : null;

    if ($lastVisit) {
        echo '<p>Vous avez déjà visité cette page le ' . date('d/m/Y H:i:s', strtotime($lastVisit)) . '</p>';
    }

    // Définition du cookie pour la prochaine fois
    setcookie('last_visit', time(), time() + 30); // Cookie valable seulement 30 secondes
    ?>
</body>
</html>