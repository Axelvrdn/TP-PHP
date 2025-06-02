<?php
$valeur = $_GET['valeur1'];
$valeurs = $_GET['valeur2'];
if ($valeurs < $valeur){
    echo "$valeurs , $valeur";
}
elseif ($valeur < $valeurs){
    echo " $valeur , $valeurs ";
}
else{
    echo " $valeurs = $valeur ";
}
?>