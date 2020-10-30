<?php 
function my_autoload($class){
    if(preg_match('/\A\w+\Z/', $class)){
        include 'Entity/'.$class.'.php';
    }    
}
spl_autoload_register('my_autoload');


$personnage1 = new Personnage("Aragon", "Archer"); 
var_dump($personnage1);

// Conexion à la base de donnée et rêquetes
/*    
$pdo = Connexion::connect();
$query = $pdo->query("SELECT * FROM jeux");
if ($query){
    $users = $query->fetchAll();}
var_dump($users);   */ 









