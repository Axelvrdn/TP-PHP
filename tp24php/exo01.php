<?php
if (isset($_POST['code_postal'])) {
    $code_postal = htmlspecialchars($_POST['code_postal']);
    $url = "https://apicarto.ign.fr/api/codes-postaux/communes/$code_postal";

    // Appel de l'API
    $response = file_get_contents($url);
    $communes = json_decode($response, true);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche de communes</title>
</head>
<body>
    <form method="post">
        <label for="code_postal">Entrez un code postal :</label>
        <input type="text" id="code_postal" name="code_postal" required>
        <button type="submit">Rechercher</button>
    </form>

    <?php if (!empty($communes)) : ?>
        <label for="communes">Sélectionnez une commune :</label>
        <select id="communes">
            <?php foreach ($communes as $commune) : ?>
                <option><?= htmlspecialchars($commune['nomCommune']) ?></option>
            <?php endforeach; ?>
        </select>
    <?php elseif (isset($_POST['code_postal'])) : ?>
        <p>Aucune commune trouvée pour ce code postal.</p>
    <?php endif; ?>
</body>
</html>
