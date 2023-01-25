<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $toby = new Ballon("toby","violet");
    echo $toby;
    $bob = new Ballon("bob","orange");
    echo $bob;
    $toby-> changeCouleur($bob,"noir");
    echo $bob;

?>
