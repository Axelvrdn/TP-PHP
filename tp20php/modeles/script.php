<?php
include_once'../arme.php';
function connexionBDD()
{
    $bdd = 'mysql:host=127.0.0.1;dbname=JeuArcade';
    $user ='JeuArcade';
    $password = 'eOY9ZPyq_@vbBs[G';
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

function insert($pdo, $uneArme) {
    try {
        $monObjPdoStatement = $pdo->prepare("INSERT INTO Arme VALUES(null,:monNom,:monImage,:monDescription,:monType)");
        $bvc1=$monObjPdoStatement->bindValue(':monNom', $uneArme->getNom());
        $bvc2=$monObjPdoStatement->bindValue(':monImage', $uneArme->getImage() );
        $bvc3=$monObjPdoStatement->bindValue(':monDescription', $uneArme->getDescription() );
        $bvc4=$monObjPdoStatement->bindValue(':monType', $uneArme->getType() );
        $okExecution = $monObjPdoStatement -> execute();
        return true;
    }catch (PDOException $e) {
    echo $e->getMessage();
    return false;
    }
}

function select($pdo, $uneArme) {   
    try {
        $monObjPdoStatement = $pdo->prepare("INSERT INTO Arme VALUES(null,:monNom,:monImage,:monDescription,:monType)");
        $bvc1=$monObjPdoStatement->bindValue(':monNom', $uneArme->getNom());
        $bvc2=$monObjPdoStatement->bindValue(':monImage', $uneArme->getImage() );
        $bvc3=$monObjPdoStatement->bindValue(':monDescription', $uneArme->getDescription() );
        $bvc4=$monObjPdoStatement->bindValue(':monType', $uneArme->getType() );
        $okExecution = $monObjPdoStatement -> execute();
        return true;
    }catch (PDOException $e) {
    echo $e->getMessage();
    return false;
    }
}



?>