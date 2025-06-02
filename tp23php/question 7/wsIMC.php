<?php
header('Content-Type: application/json');
/* pour tester le ws : 
 * http://localhost/testWebServices/wsIMC.php?poids=....&taille=....
 */
$poids = $_GET['poids'];
$taille = $_GET['taille'];

$taille = $taille/100;
$imc= ($poids / ($taille * $taille));
     
       
$tab = array("imc" => $imc);
print (json_encode($tab)); 


?>