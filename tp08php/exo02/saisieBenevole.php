<html>  

  <head>  

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />  

    <title>Authentification</title>  

  </head>  

  <body>  

    <form action="enregistrementBenevole.php" method="POST">  

        Civilité : <br>

        <label for="sex1">Mademoiselle : <input type="radio" id="sex1" name="civilité" value="Mademoiselle" checked/>  <br>

        <label for="sex2">Madame : <input type="radio" id="sex2" name="civilité" value="Madame" /> <br>

        <label for="sex3">Monsieur : <input type="radio" id="sex3" name="civilité" value="Monsieur" /> <br><br>

        Nom :  

<input type="text" name="nom" size="20" maxlength="20" required />  

<br> <br> 

        Prénom :  

        <input type="text" name="prénom" size="20" maxlength="20" required /> </br>  <br>

 



        Disponibiliter Hebdomadaires :

        <input type="checkbox" checked name="Dispo[]" id="interets1" class="cb" value="La semaine"/> 

<label for="interets1">La semaine</label > 

<input type="checkbox" name="Dispo[]" id="interets2" class="cb" value="Le week-end"/> 

<label for="interets2">Le week-end</label> 

<input type="checkbox" name="Dispo[]" class="cb" id="interets3" value="La journée" /> 

<label for="interets3">La journée</label>

<input type="checkbox" name="Dispo[]" class="cb" id="interets4" value="Le soir" /> 

<label for="interets4">Le soir</label> <br> <br>

        Situation actuel :
        
          <select name="situation" id="situ"> 

<option  value="en activiter">En activiter</option> 

<option value="à la recherche d'emploi">A la recherche d'emploi</option> 

</select><br> <br>

<input type="submit" name="soumettre" value="Envoyer" />	<br>  
          <input type="reset" name="effacer" value="Effacer" />  

    </form>  

  </body>  

</html> 