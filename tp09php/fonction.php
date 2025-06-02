<?php 

function exercice1($array,$nombre){
    $count = 0;
    foreach ($array as $valeur) {
        if ($valeur > $nombre) {
            $count++;
        }
    } 
    echo "$count";
}

function exercice2($array){
    $count = count($array);
    if ($count < 3){
        echo"débutant \n";
    }
    elseif ($count <= 4){
        echo"intermédiaire \n";
    }
    else {
        echo "expert \n";
    }

}

function exercice3($etudiant , $option_choisis){
    $lesEtudeDeLaSpe = array();
    foreach($etudiant as $nom => $option){
        if ($option == $option_choisis ){
            $lesEtudeDeLaSpe = array($nom);
        }
    }
    return $lesEtudeDeLaSpe;
}




function exercice4($mot){
    $occurrences = array();
    for ($i = 0; $i < strlen($mot); $i++) {
        $lettre = $mot[$i];
        if (array_key_exists($lettre, $occurrences)) {
            
            $occurrences[$lettre]++;
        }
        else {
            $occurrences[$lettre] = 1;
        }
    }


    return $occurrences;
}

function exercice6() {
    return [
        'janvier'   => 31,
        'fevrier'   => date('n') === 2 ? (date('L') ? 29 : 28) : 29, // Pour gérer les années bissextiles
        'mars'      => 31,
        'avril'     => 30,
        'mai'       => 31,
        'juin'      => 30,
        'juillet'   => 31,
        'aout'      => 31,
        'septembre' => 30,
        'octobre'   => 31,
        'novembre'  => 30,
        'decembre'  => 31,
    ];
}

?>