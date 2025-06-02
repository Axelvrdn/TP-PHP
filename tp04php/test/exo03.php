<?php
include_once "../mesFonction.php";

/*Test avec une lettre dans le mot */
echo exercice3('Bonjour','B','j');
echo '<br>';

/*Test avec des lettre dans le mot */
echo exercice3('Bonjour','B','j');
echo '<br>';

/*Test avec une lettre pas dans le mot */
echo exercice3('Bonjour','p','B');
echo '<br>';

/*Test avec une lettre en majuscule */
echo exercice3('Bonjour','O','B');
echo '<br>';

/*Test en remplaceant par un caractère */
echo exercice3('Bonjour','o','6');
echo '<br>';

/*Test avec une lettre au début du mot */
echo exercice3('Bonjour','B','R');
echo '<br>';

/*Test avec une lettre a la fin du mot */
echo exercice3('Bonjour','r','B');
echo '<br>';

/*Test remplace une lettre par rien */
echo exercice3('Bonjour','B','');
echo '<br>';

?>