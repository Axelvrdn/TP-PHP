<?php
function donneNbVisiteurs() {

    $fichier = 'textes/Compteur.txt';

    $compteur = (int)file_get_contents($fichier);

    if (file_exists($fichier)) {

        $compteur++;

    }

    file_put_contents($fichier, $compteur);

    return $compteur;

}


function donneCivilite($codeCivilite)
{
    
switch ($codeCivilite) {
    case 'Mme':
        $genre = "Madame";
        break;
    case 'M':
        $genre = "Monsieur";
        break;
    case 'Mle':
        $genre = "mademoiselle";
        break;
    }

return $genre ;

}

function donneSigne($moisJour)
{ $signe="";
    if ($moisJour <= 120 || $moisJour >= 1222)
    {
            $signe = "Capricorne";
    }
    else
    {   
        if ($moisJour <= 218)
            $signe = "Verseau";
           
        else
        {
              if ($moisJour <= 320)
                    $signe = "Poissons";
              else
              {  if ($moisJour <= 420)
                    $signe = "Belier";
                    
                 else
                    {   if ($moisJour <= 521)
                            $signe = "Taureau";
                         
                        else
                         {  if ($moisJour <= 621)
                              $signe = "Gemeaux";
                              
                            else
                            {  if ($moisJour <= 722)
                                   $signe = "Cancer";
                                    
                               else{
                                if ($moisJour <= 823)
                                        $signe = "Lion";
                                else{
                                    if ($moisJour <= 923)
                                        $signe = "Vierge";
                                    else{
                                        if ($moisJour <= 1023)
                                            $signe = "Balance";
                                        else{
                                            if ($moisJour <= 1122)
                                                $signe = "Scorpion";
                                            else{
                                                if ($moisJour <= 1221)
                                                    $signe = "Sagittaire";
                                                        
                                                         
                                            }      
                                                     
                                        }        
                                                 
                                    }       
                                             
                                }
                                
                                 
                               }
                            }
                         }
                    }
              }
        }
    }
    return $signe;

    
    
    
    
}


function donneContenuFichier($signe) {
    $cheminFichier = "textes/$signe";
    $leFichier = fopen($cheminFichier, 'r');
    if (file_exists($cheminFichier)) {
        $contenu = file_get_contents($cheminFichier);
        return $contenu;
    } 
    else {
        return 'Le fichier n\'existe pas.';
    }
}





?>
