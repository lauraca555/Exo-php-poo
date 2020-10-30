<?php
    /**
     * @class Personage
     */
     

    class Personnage {
        
        
        public string $nom;
        public object $famille;
        
              
        public function __construct(string $nom, string $famille)
        {
            $this->nom = $nom;
            
            /*if ($famille == "Guerrier"):
                $famille = new $famille;
                $this->famille = $famille;
            else : $this->famille = new Guerrier;

            endif;*/

            switch($famille){
                case "Guerrier":
                    $this->famille = new Guerrier;
                    break; 
                case "Archer":
                    $this->famille = new Archer;
                    break; 
                case "Voleur":
                    $this->famille = new Voleur;
                    break;          
            }   
                            
                        
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
