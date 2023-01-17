<!-- Dans la class Fantome, ajouter une méthode ditBonjour qui renvoie le texte “Bonjour”.
Dans une autre classe Poltergeist, hériter de fantômes et surcharger cette méthode par un texte "Guten Tag".
Chaque classe peut créer des attributs et méthodes qui lui sont propres. Grâce à l’héritage, on peut remplacer les instructions d’une méthode parente par celles de sa propre méthode. Les méthodes auront exactement le même nom. On parle de réécrire, redéfinir ou de surcharger. -->

<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $ghost = new Poltergeist();//on instancie la classe
    $ghost-> setType("fantome");
    echo $ghost-> parler();

?>
