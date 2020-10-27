<?php 
class Guerrier extends Personnage 
{
    
    public int $vie = 50;
    public string $famille = "Guerrier";
    public int $maxVie = 200;
    
    public function regen(int $soin)
        {
            {
                if (($this-> vie < $this->maxVie))
                {   $result = $this->vie + $soin;
                    if ($result <= $this->maxVie)
                    {
                        $this->vie += $soin;
                    }
                    else 
                    {
                        $this->vie = $this->maxVie;  
                    }
                    
                }    
                
                return  $this-> vie;   
            }
                
            }   

}