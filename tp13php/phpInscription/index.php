<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Formulaire d'inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css"/>
    </head>
    <body>
        <form method="post" id="leForm" action="script.php">
        <fieldset>
             <legend>Informations requises pour s'inscrire</legend>
             <div class="zoneDeSaisie">
             <label for="login">Login :</label>  
             <input type="text" name="login" id="login" required/> <br/>
             </div>      
              <div class="zoneDeSaisie">
             <label for="pwd">mot de passe :</label>
             <input type="password" name="pwd" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" title="Doit contenir au moins 12 caractères dont au moins un chiffre, une majuscule et une minuscule." required/> <br>
              </div>
              <!--<div class="zoneDeSaisie">
             <label for="login">Login :</label>  
             <input type="text" name="login" id="login" /> <br/>
             </div>      
              <div class="zoneDeSaisie">
             <label for="pwd">mot de passe :</label>
             <input type="password" name="pwd" id="pwd" /> <br>
              </div>-->
                         
        </fieldset> 
        <input type="submit" class="btnValider" name="submit" value="Envoyer"> 
        <br>
        <span id='errorLogin'></span>
        <br>
        <span id='errorPwd'></span>
      </form>
      <script src="script.js"></script>
    </body>
 </html>
