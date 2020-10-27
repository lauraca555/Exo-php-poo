<?php 
include_once __DIR__. "/../Entity/Personnage.php";
include_once __DIR__. "/../Entity/Guerrier.php";
include_once __DIR__. "/../Entity/Connexion.php";
$pdo = Connexion::connect();
$personnage1 = new Personnage("Aragon"); 
//var_dump ($aragon);

echo "Nom du personnage: ". $personnage1->nom. "</br>";
echo "Point de vie: ". $personnage1->vie. "</br>";
echo "Point de dégat: ". $personnage1->degat. "</br>";
echo "Famille : ". $personnage1->famille. "</br>";
$guerrier = new Guerrier("Arcanos");
$guerrier->regen(400);
var_dump($guerrier);
//echo get_parent_class($gerrier);


