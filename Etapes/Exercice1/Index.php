<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    $toby = new Ballon("toby","violet");
    echo $toby-> getInfos();
    $bob = new Ballon("bob","orange");
    echo $bob-> getInfos();
    $toby-> changeCouleur($bob,"noir");
    echo $bob-> getInfos();

?>
