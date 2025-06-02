<?php
// Inclusion du fichier contenant les fonctions d'accès aux données
include_once '../modele/mesFonctionsAccesAuxDonnees.php';

if (isset($_POST["eMail"], $_POST["pays"], $_POST["periode"])) {

    $email = htmlspecialchars(trim($_POST["eMail"]));
    $pays = htmlspecialchars(trim($_POST["pays"]));
    $periode = htmlspecialchars(trim($_POST["periode"]));

    $pdo = connexionBDD();

    if ($pdo) {
        if (inscritAbonne($pdo, $email, $pays, $periode)) {
            echo " L'abonné a été inscrit avec succès ! ";
        } else {
            echo " Erreur lors de l'inscription de l'abonné. ";
        }
        deconnexionBDD($pdo);
    }
}


?>
