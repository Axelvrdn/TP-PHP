<?php
$sexe = $_GET['sexe'];
$age = $_GET['âge'];
switch ($sexe) {
    case "Homme":
        if ($age<=20){
            echo "";
        }
        else {
            echo "";
        }
        break;
    case "Femme":
        if ($age<18 && $age>35) {
            echo"";
        }
        else {
            
        }
        break;
    case "Autre":
        echo "";
        break;
}
?>