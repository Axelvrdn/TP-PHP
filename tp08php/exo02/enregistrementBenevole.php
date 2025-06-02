<?php 

$civilite = $_POST['civilité']; 
$nom = $_POST['nom'];
$prénom = $_POST['prénom'];  
$situation = $_POST['situation']; 



echo "$civilite $nom $prénom <br> Nous avons bien enregistrer votre situation actuelle est $situation et que vous êtes disponnible : <br>" ;
if (isset($_POST['Dispo'])) {
    echo "<ul>";
    // Parcours du tableau des options sélectionnées
    for ($i = 0; $i < count($_POST['Dispo']); $i++) {
        $option = $_POST['Dispo'][$i];
        echo "<li>" . htmlspecialchars($option) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucune option sélectionnée.</p>";
} 
?> 
