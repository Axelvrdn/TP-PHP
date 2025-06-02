<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Affichage Coordonnées - testisset212.php</title>
</head>
<body>
    <?php
    // Récupération des variables post 'nom' et 'dateNaissance'
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nom']) && isset($_POST['dateNaissance'])) {
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $dateNaissance = htmlspecialchars(strip_tags($_POST['dateNaissance']));

            echo "<p>Votre nom: {$nom}</p>";
            echo "<p>Votre date de naissance: {$dateNaissance}</p>";
        } else {
            echo "<p>Une erreur s'est produite pendant la réception des données.</p>";
        }
    } else {
        header("Location: testisset211.php");
        exit;
    }
    ?>
</body>
</html>