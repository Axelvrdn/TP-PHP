<?php
    require_once('fonctions.php');
  
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope 2024</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="stylesHoroscope.css">
       
    </head>
<body>
        
<img src="images/HoroscopeIco.gif" alt="icone horoscope"><img src="images/Astrologie.gif" alt="logoAstrologie">
<form method="POST" action="afficheResultat.php">
    <div id="blocCivilite">   
    
        <input id="Opt_CiviliteMme" type="radio" name="rdbCivilite" value="Mme" checked>
        <label for="Opt_CiviliteMme">Mme</label>
        <br>

        <input id="Opt_CiviliteMle" type="radio" name="rdbCivilite" value="Mle">
        <label for="Opt_CiviliteMle">Mlle</label>
        <br>

        <input id="Opt_CiviliteM" type="radio" name="rdbCivilite" value="M">
        <label for="Opt_CiviliteM">M.</label>
   
  </div>
  <div id="blocNomPrenom">
        <label for="txtNom">Nom :</label>
        <input id="txtNom" type="text" name="txtNom" placeholder="saisissez votre nom">
       <label for="txtPrenom">Prénom :</label>
        <input id="txtPrenom" type="text" name="txtPrenom" placeholder="saisissez votre prénom">
    
  </div>
  <div id="blocDateDeNaissance">
      <label for="txtDate">Quel est votre date de naissance (jj/mm/aaaa) ?</label>
        <input id="txtDate" class="inputJour" name="txtJour" type="text" >
        /
        <input id="txMois" class="inputMois" type="text" name="txtMois">
        /
        <input id="txtAnnee" class="inputAnnee" type="text" name="txtAnnee">
  
  </div>
  <div id="blocDesBoutons">
    <input type="submit" name="Cmd_Envoyer" value="Envoyer">
  
  
    <input type="reset" name="Cmd_Retablir" value="R&eacute;tablir">
  </div>
  
  </form>
<div id="blocLogosDesSignes">
  <table>
    <tr>
      <td><img src="images/Belier.gif" alt ="imageBelier"></td>
      <td><img src="images/Taureau.gif" alt="imageTaureau"></td>
    </tr>
    <tr>
      <td><img src="images/Gemeaux.gif" alt="imageGemeaux"></td>
      <td><img src="images/Cancer.gif" alt="imageCancer"></td>
    </tr>
    <tr>
      <td><img src="images/Lion.gif" alt="imageLion"></td>
      <td><img src="images/Vierge.gif" alt="imageVierge"></td>
    </tr>
    <tr>
      <td><img src="images/Balance.gif" alt="imageBalance"></td>
      <td><img src="images/Scorpion.gif" alt="imageScorpion"></td>
    </tr>
    <tr>
      <td><img src="images/Sagittaire.gif" alt ="imageSagittaire"></td>
      <td><img src="images/Capricorne.gif" alt="imageCapricorne"></td>
    </tr>
    <tr>
      <td><img src="images/Verseau.gif" alt="imageVerseau"></td>
      <td><img src="images/Poissons.gif" alt="imagePoisson"></td>
    </tr>
  </table>
</div>

<div id="blocNbVisiteurs" >
    Vous êtes le <?php echo donneNbVisiteurs(); ?> ème visiteur
</div>
            
            
            
    </body>
</html>
