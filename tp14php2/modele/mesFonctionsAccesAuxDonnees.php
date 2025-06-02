<?php

function connexionBDD()
{
    $bdd = 'mysql:host=localhost;dbname=newsletter';
    $user ='newsletter';
    $password = 'newsletter';
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

function testMail($pdo, $email)
{
    $sql = "SELECT * FROM abonnes WHERE email = :email";
    $req = $pdo->prepare($sql);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->execute();
    
    $res = $req->fetchAll(PDO::FETCH_ASSOC);
    
    return $res;
}

function getLesPays($pdo) {
    try {

        $sql = "SELECT id, nom FROM pays ORDER BY nom";
        $req = $pdo->prepare($sql);
        $req->execute();

        $res = $req->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    } catch (PDOException $e) {

        echo $e->getMessage();
        return false;
        
    }
}



function inscritAbonne($pdo, $email, $pays, $periodicite)
{
    try {

        if (testMail($pdo, $email)) {
            echo "Cet e-mail existe déjà dans la base de données. ";
            return false;
        }

        $sql = "INSERT INTO abonnes (email, pays, dateInscription, periodicite)
                VALUES (:email, :pays, CURDATE(), :periodicite)";

        $req = $pdo->prepare($sql);

        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->bindValue(':pays', $pays, PDO::PARAM_INT);
        $req->bindValue(':periodicite', $periodicite, PDO::PARAM_INT);

        $req->execute();

        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}




?>