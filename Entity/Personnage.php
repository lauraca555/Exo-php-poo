<?php
    /**
     * @class Personage
     */
    require 'Guerrier.php';       
    class Personnage {
        
        
        public string $nom;
        public object $famille;
        
              
        public function __construct(string $nom, object $famille)
        {
            $this-> nom = $nom; 
            $this->famille = new Voleur;  
                            
                        
        }
        
        

        
    }
