<?php
class Connexion{

    public static function connect(){
        /* Connexion à une base MySQL avec l'invocation de pilote */
        $dsn = 'mysql:dbname=exo_afpa;host=localhost';
        $user = 'lucan';
        $password = '42rmi4p5';
    
        try {
            $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        } 
    //echo "conexion ok <br>";    
    }


} 