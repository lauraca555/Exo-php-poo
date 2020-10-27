<?php 
include_once __DIR__. "/../Entity/Personnage.php";
include_once __DIR__. "/../Entity/Connexion.php";
$pdo = Connexion::connect();
$personnage1 = new Personnage("Aragon", 200, 50, "archer"); 
//var_dump ($aragon);
echo "Nom du personnage: ". $personnage1->nom. "</br>";
echo "Point de vie: ". $personnage1->vie. "</br>";
echo "Point de dégat: ". $personnage1->degat. "</br>";
echo "Famille : ". $personnage1->famille. "</br>";


