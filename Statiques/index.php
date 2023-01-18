<!-- Les méthodes statiques en PHP sont des méthodes qui peuvent être appelées sur une classe plutôt que sur une instance de cette classe. Elles sont déclarées en utilisant le mot-clé "static" avant le type de retour de la fonction.

-->

<?php

require_once 'Fantomes.php';
require_once 'Manager.php';

$infos=new Fantomes(['nom' => 'Casper','couleur' => 'blanc', 'pv' => 10, 'velocite' => 1, 'id' => 1]);
// $casper=new Fantome($infos);
// $casper->message();
// var_dump($infos);

$bdd = new PDO('mysql:host=localhost;dbname=fantomes', 'root', '');
$casperManager = new Manager($bdd);
$casperManager->add($infos);
// var_dump($casperManager);


?>