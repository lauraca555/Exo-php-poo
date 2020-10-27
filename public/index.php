<?php 

include ".." . DIRECTORY_SEPARATOR . "entity". DIRECTORY_SEPARATOR . "Personnage.php";
/*
function chargerClasse($classe)
{
    require dirname(__DIR__) . DIRECTORY_SEPARATOR. $classe . DIRECTORY_SEPARATOR .".php";
}

spl_autoload_register("chargerClasse");
*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
    </head>
    <body>
        
        <?php

        //instantiations de chacune des classes, afin de pouvoir les attribuer à la classe principale (Personnage : dernier paramètre $classe)
        $voleur = new Voleur("Voleur"); 
        $guerrier = new Guerrier("Guerrier");
        $archer = new Archer("Archer");


        $perso = new Personnage("Albus", 250, 56, $voleur); //Création d'un personnage : $nom, $vie, $degats, $classe
        var_dump($perso);

        $perso::connectBdd(); // Utilisation d'une fonction statique avec la syntaxe directe "::" --> ne renverra pour l'instant qu'un message de connexion réussie ou d'échec.

        
        $perso1 = new Personnage("Coléreux", 350, 36, $guerrier); //Idem
        var_dump($perso1);

        $perso1::connectBdd();

        ?>


    </body>
</html>