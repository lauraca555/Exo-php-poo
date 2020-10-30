<?php 
include_once __DIR__. "/../Entity/Connexion.php";
include_once __DIR__. "/../Entity/Voleur.php";
include_once __DIR__. "/../Entity/Personnage.php";


$pdo = Connexion::connect();
$voleur = new Voleur();
$personnage1 = new Personnage("Aragon", $voleur); 
var_dump($personnage1);

 



