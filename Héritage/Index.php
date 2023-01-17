<!-- L'héritage en PDO (PHP Data Objects) est un concept de programmation orientée objet qui permet à une classe de hériter les propriétés et les méthodes d'une classe parente. Cela signifie qu'une classe enfant peut utiliser toutes les propriétés et méthodes déclarées dans la classe parente, ainsi qu'ajouter des propriétés et méthodes supplémentaires.

En utilisant l'héritage en PDO, on peut créer une structure de classes plus logique et plus facile à maintenir. Par exemple, si vous avez une classe Bdd qui gère la connexion à une base de données, vous pouvez créer une classe Manager qui hérite de cette classe Bdd pour gérer les opérations CRUD (create, read, update, delete) sur les données de la base de données. -->

<!-- Créer une class Fantome

Créez un nouveau type de fantôme Poltergeist, celui hérite de class Fantome.

Créez une méthode “parle” pour la class Fantome qui renvoie "le Fantome fait : Bouhouhouhou"

Créer 1 instance de Fantome et 1 instance de Poltergeist.

Appelez cette méthode via les 2 objets différents.

Créer une nouvelle méthode Colere pour la classe Poltergeist. Celle-ci devant écrire “Poltergeist : lancement d’assiettes”;

Appelez cette nouvelle méthode. -->

<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
    require $class.'.php';
    }

    $ghost = new Poltergeist();//on instancie la classe
    $ghost-> setType("fantome");
    echo $ghost-> parler();
    echo $ghost-> colere();

?>
