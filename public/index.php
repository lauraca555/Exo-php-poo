<?php 

include_once __DIR__. "/../Entity/Voleur.php";
include_once __DIR__. "/../Entity/Personnage.php";
//include_once __DIR__. "/../Entity/Connexion.php";
       




$voleur = new Voleur();
$personnage1 = new Personnage("Aragon", $voleur); 
var_dump($personnage1);

// Conexion à la base de donnée et rêquetes
    
$pdo = Connexion::connect();
$query = $pdo->query("SELECT * FROM jeux");
if ($query){
    $users = $query->fetchAll();}
var_dump($users);    









