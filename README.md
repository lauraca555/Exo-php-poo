# Exercice : Suite Classe Personnage

## Préambule

Dans cette suite d'exo je vous propose  :

### 2ième Etape

*1 - Crée une ou plusieurs class `Guerrier/Voleur/Archer ...` qui Hérite de la class `Personnage` Changer les points de VIE et la FORCE en fonction des `Role`*

*2 - Crée une base de donnée personnage et une table personnage*

*3 - Inserer un Personnage dans la base de donnée qui est si-dessousn, directement dans la base de donnée via PHPMYADMIN entré le nom etc..*

*4 - Crée une méthode qui va nous afficher notre class Personnage grace à base de donnée (utiliser un SELECT pour Afficher)*

*5 - Instancier 2 object avec les 2 class qui herite de Personnage exemple : Voleur / Guerrier*

*ATTENTION - Libre de faire comme bon vous sembles !*
--- 
## Base de données

`Personnage`

| Colonne   | Type  | Description                   | 
|---------- |-------|-------------------------------|
| **id**    | AI    | clé primaire                  |
| personnage| text  | nom du Personnage             |
| arme      | text  | arme du joueur                |
| class     | text  | Archer / Voleur / Guerrier    |
|  vie      | float | point de vie                  |
|  degat    | int   | force du personnage           |



------------------------------------------------------------------------------------------------------------------------------------------------------------------

# Exo-php-poo
Practique du php poo.

# Exercice : Classe Personnage

## Préambule

Dans cette exercice je vous propose de crée une Class `Personnage` Dans un dossier `Entity` ou appeler le comme vous voulez.

### 1er Étape
---

Crée un Dossier `Public` et y mettre : 

 - `index.php` : page d'accueil


*1 - Un premier temps, crée la class Personnage, Le personnage contiendra en propriété ou attribut :  une vie , des dégats , un nom, une class*
*2 - Pensez a bien typer vos propriétés ou attribut et leur donnée une visibilité public*
*3 - Crée une function construc*
*4 - Crée une fonction ou méthode qui va permettre de ce connecter à la base de donnée*
*5 - Crée une Méthode qui va nous permettre de regenerer le personnage, qu'on va appeler regen()*



--- 
## Base de données

`Personnage`

| Colonne   | Type  | Description                   | 
|---------- |-------|-------------------------------|
| **id**    | AI    | clé primaire                  |
| personnage| text  | nom du Personnage             |
| arme      | text  | arme du joueur                |
| class     | text  | Archer / Voleur / Guerrier    |
|   vie     | float  | point de vie                 |

