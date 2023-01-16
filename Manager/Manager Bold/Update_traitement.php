<?php

    require_once 'Bdd.php';
    require_once 'Fantomes.php';
    require_once 'Manager.php';

    $infos=new Fantomes(['nom' => $_POST['nom'],'couleur' => $_POST['couleur'], 'pv' => $_POST['pv'], 'velocite' => $_POST['velocite']]);
 
    $bdd = new PDO('mysql:host=localhost;dbname=fantomes', 'root', '');
    $Manager = new Manager($bdd);
    $Manager->update($infos);

    echo "".$_POST['nom'].", le fantome a bien été modifié";
    echo "</br> <a href='index.php'>Accueil</a>";
?>