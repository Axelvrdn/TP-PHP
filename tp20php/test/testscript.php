<?php
include_once '../modeles/script.php';

$a1 = new Arme('mon épée','epee01.jpeg','épéé super puissante','épée');

var_dump(insert(connexionBDD(),$a1));