<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $Harley = new Personnage("Harley");
    $Joker = new Personnage("Joker");
    $Joker->changeArme("Pistolet");
    $Harley->changeArme("Marteau");
    $Joker-> attaquer($Harley);
    

    echo $Harley->message();
    echo $Joker->message();
?>