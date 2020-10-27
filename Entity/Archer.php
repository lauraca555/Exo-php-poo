<?php class Archer extends Personnage 
{
    public int $vie = 200;
    public string $famille = "Archer";

    public function regen(int $soin)
        {
            parent::regen($soin);
                
            } 
}