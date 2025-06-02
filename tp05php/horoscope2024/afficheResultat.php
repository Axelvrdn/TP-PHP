<?php
    require_once('fonctions.php');
      
 ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon horoscope 2024</title>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="stylesHoroscope.css">
       
    </head>
<body>
<img src="images/HoroscopeIco.gif" alt="logo horoscope"><img src="images/Astrologie.gif" alt="logo astrologie">
<div id="blocCivilite">
<?php 

echo donneCivilite($_POST['rdbCivilite']); 
echo ' '.strtoupper($_POST['txtNom']).' '.strtoupper($_POST['txtPrenom']);

?>
 
</div>



    <h1>Voici votre horoscope</h1>
    
<div id="blocInfos">
<?php 

$signe = donneSigne($_POST['txtMois'].$_POST['txtJour']); 
echo donneContenuFichier($signe.".txt");
?>

</div>


   
<img src="images/<?php echo $signe.'.gif'; ?>" id="imgZodiaque"  alt="image du signe">
<p></p>


</body>
</html>