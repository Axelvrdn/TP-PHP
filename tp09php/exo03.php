<?php
include_once "fonction.php";
$option_choisis = 'SLAM';
$etudiant = array( 

    'Finn' => 'SLAM',  
    
    'Jake' => 'SLAM', 
    
    'Marceline' => 'SISR', 
    
    'Elliot' => 'SISR', 
    
    'Darline' => 'SLAM', 
    
    'Angela' => 'SISR', 
    
    'Tyrell' => 'SISR'); 

var_dump(exercice3($etudiant,$option_choisis));
?>