<?php
    /**
     * @class Personage
     */

    class Personnage {
        const MAXVIE = 50;
        
        public string $nom;
        public int $vie = SELF::MAXVIE;
        public int $degat = 0 ;
        public string $famille = "homme";

        public function __construct(string $nom)
        {
            $this-> nom = $nom;
            
        }
        
        public function regen(int $soin)
        {
            if (($this-> vie < SELF::MAXVIE))
            {   $result = $this->vie + $soin;
                if ($result <= SELF::MAXVIE)
                {
                    $this->vie += $soin;
                }
                else 
                {
                    $this->vie = SELF::MAXVIE;  
                }
                
            }    
            
            return  $this-> vie;   
        }

        
    }
