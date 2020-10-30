<?php
    /**
     * @class Personage
     */
    require 'Guerrier.php';
    include_once __DIR__. "/../Entity/Connexion.php";       
    class Personnage {
        
        
        public string $nom;
        public object $famille;
        
              
        public function __construct(string $nom, object $famille)
        {
            $this-> nom = $nom; 
            $this->famille = new Voleur;  
                            
                        
        }
/*
    // Conexion à la base de donnée et rêquetes
    
    $pdo = Connexion::connect();
    $query = prepare("SELECT * FROM jeux"); 
    $query->execute();

    /* Récupération de toutes les lignes d'un jeu de résultats 
    print("Récupération de toutes les lignes d'un jeu de résultats :\n");
    $result = $query->fetchAll();
    print_r($query);   */


        
        

        
    }
