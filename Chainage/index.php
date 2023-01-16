<?php
    require_once 'Fantomes.php';

    $dolly=new Fantomes("Dolly","rose");
    $dolly
        ->boire(11)
        ->setVelocite(2)
        ->message();

    $clyde=(new Fantomes("Clyde","jaune"))
        ->perdre(5)
        ->perdre(10)
        ->message();

    
?>