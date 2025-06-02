<?php
include_once '../modele/mesFonctionsAccesAuxDonnees.php';

$email = htmlspecialchars(trim($_POST['eMail']));
$periodicite = $_POST['periode'];

$lePdo = connexionBDD();

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est considérée comme valide.<br>";
    
    if (strlen($email) <= veriflongeuremail($lePdo)){
        echo "Longueur mail ok.<br>";

        if (verifmail($lePdo, $email) == FALSE){
        echo 'Mail déjàs enregistrer';
        }
        else{
            inscritAbonne($lePdo, $email, $pays, $periodicite);
        }
    }
    else{
        echo "Longueur mail trop long.<br>";
    }
} else {
    echo "L'adresse email '$email' est considérée comme invalide.<br>";
}

foreach($_POST['pays'] as $p) {
    echo "<option value='".$p['id']."'>".$p['nom']."</option>";
}