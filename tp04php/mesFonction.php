<?php
function exercice1($nom,$prenom){
    $Nom = strtoupper($nom);
    $Prenom = strtolower($prenom);
    echo ("Bonjour, $Nom $Prenom");
}
function exercice2($mot,$lettre){
    $réponse = strpos($mot,$lettre);
    return $réponse;
}
function exercice3($mot,$lettre,$caractère){
    $motsv2= str_replace($lettre,$caractère,$mot);
    return $motsv2;
}
function exercice4($mot,$pos){
    $réponse = substr("$mot",$pos);
    return $réponse;
}
function exercice5($mot, $positionDebut, $positionFin) {
    if ($positionDebut < 0 || $positionFin < 0 || $positionDebut >= strlen($mot) || $positionFin >= strlen($mot)) {
        return "Positions de départ ou de fin incorrectes";
    }
    $partieGauche = substr($mot, 0, $positionDebut);
    $partieDroite = substr($mot, $positionFin + 1);
    $motFinal = $partieGauche . $partieDroite;

    return $motFinal;
}
function exercie6($mot, $position) {
    if (($position < 0) || ($position >= strlen($mot))) {
        return "Position incorrecte";
    } 
    $lettre = substr($mot, $position, 1);

    return $lettre;
}
function exercice7($mot, $position) {
    if ($position < 0 || $position >= strlen($mot)) {
        
        return "Position incorrecte";
    }

        $lettresDepuisPosition = substr($mot, $position);

    return $lettresDepuisPosition;
}

function exercice8($mot, $position, $nombreLettres) {
    if ($position < 0 || $position >= strlen($mot) || $nombreLettres <= 0) {
        
        return "Paramètres incorrects";
    }

    
    $lettresDepuisPosition = substr($mot, $position, $nombreLettres);

    return $lettresDepuisPosition;
}

function exercice9($prenom, $nom) {
    $prenom = ucfirst(strtolower($prenom)); 
    $nom = ucfirst(strtolower($nom));       
    $nomComplet = $prenom . ' ' . $nom;     
    return $nomComplet;
}

function exercice10($mot, $lettreMystere) {
    $position = strpos($mot, $lettreMystere);


    if ($position !== false) {
        return true; 
    } 
    else {
        return false; 
    }
}

function exercice11() {
    $lettresMinuscules = 'abcdefghijklmnopqrstuvwxyz'; 

    $indexAleatoire = rand(0, strlen($lettresMinuscules) - 1);

    
    $lettreAleatoire = $lettresMinuscules[$indexAleatoire];

    return $lettreAleatoire;
}


?>