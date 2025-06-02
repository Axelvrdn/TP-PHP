<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page HTML Simple</title>
    <?php
    // Choix du style par défaut ou spécial selon les cookies
    $styleSheet = isset($_COOKIE['preferredStyleSheet']) && $_COOKIE['preferredStyleSheet'] === 'special' ? 'special.css' : 'default.css';

    // Affichage du lien vers le fichier CSS sélectionné
    echo "<link rel='stylesheet' href='$styleSheet'>";
    ?>
</head>
<body>
    <h1>Titre principal</h1>
    <p>Ceci est un paragraphe d'exemple.</p>

    <!-- Formulaire pour changer le thème -->
    <form action="" method="post">
        <label for="styleSheetChoice">Choisissez votre feuille de style:</label><br>
        <select name="styleSheetChoice" id="styleSheetChoice">
            <option value="default"<?= $styleSheet == 'default.css' ? ' selected' : '' ?>>Défaut</option>
            <option value="special"<?= $styleSheet == 'special.css' ? ' selected' : '' ?>>Spécial</option>
        </select><br>
        <input type="submit" value="Appliquer">
    </form>

    <?php
    // Gestion du choix de l'utilisateur et mise à jour du cookie
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedStyleSheet = $_POST['styleSheetChoice'];
        setcookie("preferredStyleSheet", $selectedStyleSheet, time() + 1800); // Cookie valide pendant 30 min
        header("Location: " . $_SERVER["PHP_SELF"]);
    }
    ?>
</body>
</html>