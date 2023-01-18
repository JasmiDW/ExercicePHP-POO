<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $Harley = new Personnage("Harley");
    $Joker = new Personnage("Joker");
    $Joker-> attaquer($Harley,15);
    $Joker-> attaquer($Harley,15);
    echo $Harley->message();
    echo $Joker->message();
?>