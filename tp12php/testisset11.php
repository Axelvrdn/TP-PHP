<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test ID par Méthode GET</title>
</head>
<body>
    <?php
    // Test si l'id existe dans l'URL via la méthode GET
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        echo "<p>L'ID reçu est : $id</p>";
        
        // Code supplémentaire traitant l'ID...
    } else {
        echo "<p>Aucun ID n'a été transmis via la méthode GET.</p>";
    }
    ?>
</body>
</html>