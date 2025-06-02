<?php
include_once'../arme.php';

$a1 = new Arme('Axel','image','description','type');
$a2 = new Arme('mon épée','epee01.jpeg','épéé super puissante','épée');


echo $a1->toString();
echo $a2->toString();

$a1->set_nom('Bonjour');
$a2->set_nom('Benoit');

$a1->set_image('image de a1');
$a2->set_image('image de a2');

$a1->set_description('une description de a1');
$a2->set_description('une description de a2');

$a1->set_type('type de a1');
$a2->set_type('type de a2');

echo $a1->toString();
echo $a2->toString();

echo $a1->getNom();
echo $a2->getNom();

echo $a1->getImage();
echo $a2->getImage();

echo $a1->getDescription();
echo $a2->getDescription();

echo $a1->getType();
echo $a2->getType();


//exercice 4

$tableau_a1 = new ArrayObject();

$valeur_a1 = $a1->toString();
$tableau_a1 [ ] = $valeur_a1 ;

foreach ($tableau_a1 as $i) {
echo $i;
}
