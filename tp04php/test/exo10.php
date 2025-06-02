<?php
$mot = "bonjour";
$lettreMystere = "o";

$contientLettre = exercice10($mot, $lettreMystere);
if ($contientLettre) {
    echo "Le mot contient la lettre mystère.";
} else {
    echo "Le mot ne contient pas la lettre mystère.";
}
?>