<?php
// Inclusion du fichier contenant les fonctions d'accès aux données
include_once '../modele/mesFonctionsAccesAuxDonnees.php';

$pdo = connexionBDD();

var_dump(getLesPays($pdo));

    




?>
