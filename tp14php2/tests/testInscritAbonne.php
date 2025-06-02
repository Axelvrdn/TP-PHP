<?php
// Inclusion du fichier contenant les fonctions d'accès aux données
include_once '../modele/mesFonctionsAccesAuxDonnees.php';

$pdo = connexionBDD();

var_dump(inscritAbonne($pdo,'aaa@gmail.com',1,12));

?>
