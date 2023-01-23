<?php

    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }


    $Kog = new Personnage("Kog'Maw");
    $Maokai = new Personnage("Maokai");
    $Ulti= new Arme("ARTILLERIE VIVANTE", 50);
    $Kog->changeArme($Ulti);
    $Kog->battle($Maokai,$Ulti);
    $Maokai->battle($Kog);
    echo $Kog->message();
    echo $Maokai->message();
    $Maokai->drink(5);
    echo $Maokai->message();


    $Lulu = new Support("Lulu");
    $Thresh = new Support("Thresh");
    $Lulu->transform($Thresh);
    echo $Lulu->infos();
    echo $Thresh->infos();


?>