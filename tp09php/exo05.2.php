<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultats</title>
</head>
<body>
    <?php
        if (!empty($_POST['selection'])) {
            $selectedKey = $_POST['selection'];
            $selectedValue = ${'_POST["selection"]'}; // Accès à la valeur du tableau grâce au nom de variable dynamique
            
            $position = array_search($selectedKey, array_keys($GLOBALS['myArray']));
            echo "<p>Position de l'élément sélectionné: {$position}</p>";
            echo "<p>Valeur sélectionnée: {$selectedValue}</p>";
        } else {
            header('Location: index.php');
        }
    ?>
</body>
</html>