<?php class Voleur extends Personnage 
{
    public int $vie = 100;
    public string $famille = "Voleur";

    public function regen(int $soin)
        {
            parent::regen($soin);
                
            } 
}