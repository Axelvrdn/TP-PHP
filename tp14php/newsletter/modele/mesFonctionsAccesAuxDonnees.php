<?php

function connexionBDD()
{
    $bdd =  'mysql:host=127.0.0.1;dbname=newsletter';
    $user = 'login4549';
    $password = 'EShQYpxfvORjMEO';
try {
   
    $ObjConnexion=new PDO($bdd,$user,$password,array(
           PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
 catch (PDOException $e)
 {
     echo $e->getMessage();
 }
return $ObjConnexion;
}

function deconnexionBDD($cnx)
{
    $cnx=null;
}


function inscritAbonne($pdo, $email, $pays, $periodicite)
{
   
     //A COMPLETER
     $monObjPdoStatement = $pdo->prepare("INSERT INTO abonnes VALUES(NULL,:monEmail,:monPays, CURRENT_DATE(), :monPeriodicite)");
     $bvc1=$monObjPdoStatement->bindValue(':monEmail', $email);
     $bvc2=$monObjPdoStatement->bindValue(':monPays', $pays);
     $bvc3=$monObjPdoStatement->bindValue(':monPeriodicite', $periodicite);
     $okExecution = $monObjPdoStatement -> execute();
    return $okExecution;
}

function verifmail($pdo, $email){
    $boolEmail = FALSE;
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM abonnes WHERE email = :monEmail");
    $stmt->bindValue(':monEmail', $email);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        $boolEmail = TRUE;
    }
return $boolEmail;
}

function veriflongeuremail($pdo){
    $pdoStatement = $pdo->prepare("SELECT CHARACTER_MAXIMUM_LENGTH FROM INFORMATION_SCHEMA.COLUMNS
    WHERE table_name = 'abonnes' AND COLUMN_NAME = 'email'");
        $execution = $pdoStatement->execute();
    $longueur = $pdoStatement->fetch();
    return $longueur[0];
    // ou     return $longueur['CHARACTER_MAXIMUM_LENGTH'];
} 

?>

