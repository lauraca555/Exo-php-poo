<?php

function chargerClasse($classe)
{
    require $classe .".php";
}

spl_autoload_register("chargerClasse"); //fonction qui permet d'appeler la classe correspondante à la demande


class Personnage {

    public string $nom;
    public int $vie;
    public int $degats;   

    public function __construct(string $nom, int $vie, int $degats, $classe)
    {
        $this -> nom = $nom;
        $this -> vie = $vie;
        $this -> degats = $degats;
        $this -> class = $classe;
    }

    public static function connectBdd() 
    {
        try 
        {
            $pdo = new PDO("mysql:dbname=personnageexo;host=localhost;port=3308", "root", "");
            $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connexion réussie";
        }

        catch (PDOException $e)
        {  
            die('Connexion échouée : '. $e -> getMessage());
        }

        return $pdo; 
    }

    public function regen(string $nom, int $vie, int $degats) 
    {
        
    }
} 