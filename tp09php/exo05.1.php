<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste déroulante</title>
</head>
<body>
    <?php
        $myArray = array(
            "toto" => "Valeur 1",
            "titi" => "Valeur 2",
            "tutu" => "Valeur 3",
            "tata" => "Valeur 4",
        );
    ?>

    <form action="exo05.2.php" method="post">
        <label for="selection">Sélectionnez une option:</label>
        <select id="selection" name="selection">
            <?php foreach ($myArray as $key => $value): ?>
                <option value="<?= $key; ?>"><?= $value; ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>
</body>
</html>