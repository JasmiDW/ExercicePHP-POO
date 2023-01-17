<?php

    require_once 'Bdd.php';
    require_once 'Fantomes.php';
    require_once 'Manager.php';

    $id=$_GET['id'];

    $bdd = new PDO('mysql:host=localhost;dbname=fantomes', 'root', '');
    $Manager = new Manager($bdd);
    $Manager->delete($id);

    echo "Le fantome a bien été effacé";
    echo "</br> <a href='index.php'>Accueil</a>";

?>     