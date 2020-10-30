<?php
/**
 * Class Famille
 * Cette classe permet de definir la famille d'un personnage
 *  */ 

 
class Tribu 
{
    
    const MAXVIE = 300;
    public int $vie = SELF::MAXVIE;
    public int $degat = 0;
   

 

    public function regen(int $soin)
        {
             $result = $this->vie + $soin;
                if ($result <= SELF::MAXVIE)
                {
                    $this->vie = $result;
                }
                else 
                {
                    $this->vie = SELF::MAXVIE;  
                }    
        }

 
        

    /**
     * Set the value of famille
     *
     * @return  self
     */ 
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }
}
 
        
         
    
