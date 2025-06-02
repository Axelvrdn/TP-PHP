<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test ID & Nom par Méthode GET</title>
</head>
<body>
    <?php
    // Tests si l'id ET le nom existent dans l'URL via la méthode GET
    if (isset($_GET['id'], $_GET['nom'])) {
        $id = intval($_GET['id']);
        $name = filter_var($_GET['nom'], FILTER_SANITIZE_STRING);
        echo "<p>L'ID reçu est : $id</p>";
        echo "<p>Le Nom reçu est : $name</p>";
        
        // Code supplémentaire traitant l'ID et le nom...
    } else {
        echo "<p>Les informations requises (ID et Nom) n'ont pas été correctement transmises via la méthode GET.</p>";
    }
    ?>
</body>
</html>