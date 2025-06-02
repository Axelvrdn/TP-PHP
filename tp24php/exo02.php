<?php
$url = "http://localhost/bingosurtoi/wsbingosurtoi.php";

// Récupérer la liste des étudiants
$response = file_get_contents($url);
$etudiants = json_decode($response, true);

// Si le formulaire de modification est soumis
if (isset($_POST['id_etudiant'], $_POST['nouveau_prenom'])) {
    $data = array(
        'id' => $_POST['id_etudiant'],
        'prenom' => $_POST['nouveau_prenom']
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);

    echo "<p>Prénom mis à jour avec succès !</p>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un étudiant</title>
</head>
<body>
    <form method="post">
        <label for="etudiant">Sélectionnez un étudiant :</label>
        <select name="id_etudiant" id="etudiant" required>
            <?php foreach ($etudiants as $etudiant) : ?>
                <option value="<?= $etudiant['id'] ?>">
                    <?= htmlspecialchars($etudiant['nom'] . " " . $etudiant['prenom']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="nouveau_prenom">Nouveau prénom :</label>
        <input type="text" id="nouveau_prenom" name="nouveau_prenom" required>
        
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
