<?php
$valeur1 = $_GET['valeur'];
$valeur9 = random_int(1,5);
$valeur2 = $valeur1 * $valeur9;
$valeur3 = $valeur2 /2;
$valeur4 = $valeur3 + 1;
echo ("$valeur3 <br>". round($valeur4));
?>