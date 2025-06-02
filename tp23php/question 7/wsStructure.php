<?php

$methode=$_SERVER["REQUEST_METHOD"];
switch ($methode){
	case "GET":
	    if (isset($_GET['id'])){
		echo "GET+ paramètre, on récupère des infos sur l'objet correspondant à l'id numéro " . $_GET['id'];
	    } else {
		echo "GET, on récupère tous les objets";
	    }
	    break;
	case "POST":
      	    echo "POST, on crée un nouvel objet dans la bdd avec les infos id=".$_POST['id'] ." et nom=".$_POST['nom'];
	  break;
	case "PATCH":
	   parse_str(file_get_contents('php://input'), $_PATCH);
           echo "PATCH, on modifie le nom en mettant ".$_PATCH['nom']. " pour l'objet existant dont l'id est ".$_PATCH['id'];
	  break; 
    	case "DELETE":
	  parse_str(file_get_contents('php://input'), $_DELETE);
      	  echo "DELETE, on supprime l'objet existant dont l'id est ".$_DELETE['id'];
	  break; 
	  	
}

