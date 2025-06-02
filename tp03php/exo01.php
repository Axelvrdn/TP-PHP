<?php
$valeur = $_GET['valeur'];
if ($valeur > 0) {
    echo "positif";
}
if ($valeur < 0){
    echo "négatif";
}
?>