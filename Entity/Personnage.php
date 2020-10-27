<?php
    /**
     * @class Personage
     */

    class Personnage {
        public string $nom;
        public int $vie;
        public int $degat;
        public string $famille;

        

        const MAXVIE = 300; 

        public function __construct(string $nom, int $vie, int $degat, string $famille)
        {
            $this-> nom = $nom;
            $this-> vie = $vie;
            $this-> degat = $degat;
            $this-> famille = $famille;
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
