<?php
$nom = $_GET['nom'];
$note1 = $_GET['note1'];
$note2 = $_GET['note2'];
$note3 = $_GET['note3'];
$test = ($note1+$note2+$note3)/3;
$moyenne = round($test);
if ($moyenne<=8){
echo "$nom est ajourné <br> moyenne des notes : $moyenne";
}
else{
    if ($moyenne >= 10){
            echo "$nom est admis <br> moyenne des notes : $moyenne";
    }
    else{
            echo "$nom doit faire le rattrapage <br> moyenne des notes : $moyenne";
    }
}
?>