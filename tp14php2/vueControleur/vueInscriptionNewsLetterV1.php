<?php
// Inclusion du fichier contenant les fonctions d'accès aux données
include_once '../modele/mesFonctionsAccesAuxDonnees.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>TP newsletter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../styles/stylesNewsLetter.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="inscription" id="inscription" method="post" action="../tests/testconnexionBDD.php">
        <div id="titreForm">Inscription à notre Newsletter</div>
        <div id="corpForm">
            <fieldset id="coordonnees">
                <legend>Coordonnées</legend>
                <p>
                    <label for="eMail" title="Veuillez saisir votre adresse email" class="oblig">* e-Mail :</label>
                    <input type="email" name="eMail" id="eMail" title="Veuillez saisir votre adresse e-mail" required maxlength="60" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                    <a href="#" class="aide" title="Votre adresse e-mail ne sera pas utilisée à des fins commerciales">
                        <img src="../img/icon_help.gif" alt="Aide" />
                    </a>
                </p>
                <p>
                    <label for="pays" title="Veuillez choisir votre pays" class="oblig">* Pays :</label>
                    <select id="pays" name="pays" title="Veuillez choisir votre pays" required>
                        <?php
                        $pdo = connexionBDD();
                        
                        if ($pdo) {
                            $pays = getLesPays($pdo);
                            
                            foreach ($pays as $p) {
                                echo "<option value='".$p['id']."'>".$p['nom']."</option>";
                            }
                            
                            deconnexionBDD($pdo);
                        }
                        ?>
                    </select>
                </p>

            </fieldset>
            <fieldset id="periodicite">
                <legend>Périodicité</legend>
                <span class="legende">Choisissez la fréquence à laquelle vous souhaitez recevoir notre newsletter :</span>
                <p>
                    <input type="radio" name="periode" id="periodeH" value="52" checked="checked" required />
                    <label for="periodeH" title="Notre newsletter vous sera envoyée toutes les semaines">Newsletter hebdomadaire</label>
                    <br />
                    <input type="radio" name="periode" id="periodeM" value="12" required />
                    <label for="periodeM" title="Notre newsletter vous sera envoyée tous les mois">Newsletter mensuelle</label>
                    <br />
                    <input type="radio" name="periode" id="periodeT" value="4" required />
                    <label for="periodeT" title="Notre newsletter vous sera envoyée tous les trimestres">Newsletter trimestrielle</label>
                </p>
            </fieldset>
            <em>* Champs obligatoires</em>
        </div>
        <div id="piedForm">
            <input type="submit" name="valid" id="valid" value="S'inscrire" />
        </div>
    </form>
</body>
</html>
