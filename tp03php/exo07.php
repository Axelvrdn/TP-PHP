<?php
$valeur = $_GET['valeur'];
echo "prenez un oeuf <br> faites chauffer de l'eau <br> mettez l'oeuf dans l'eau <br>";
switch ($valeur) {
    case 1:
        echo "faites cuire 3 minutes <br> servez dans un coquetier";
        break;
    case 2:
        echo "faites cuire 4 minutes 30 <br> enlevez la coquille <br> servez en salade";
        break;
    case 3:
        echo "faites cuire 6 minutes <br> enlevez la coquille <br> coupez l'oeuf en deux <br> mettez une noix de mayonnaise sur chaque moitiés";
        break;
}
?>