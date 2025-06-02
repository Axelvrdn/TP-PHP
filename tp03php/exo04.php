<?php
$valeur = $_GET['valeur'];
if (($valeur%2) == 1)
echo "$valeur est impair";
else
echo "$valeur est pair";
?>