<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $rectangle = new Parallelogramme(2,2);
    $carre = new Carre(3,3);
    echo $carre->message();
    echo $rectangle->message();

?>