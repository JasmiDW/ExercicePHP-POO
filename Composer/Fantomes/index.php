<?php

require "vendor/autoload.php";

use Djoul\Fantomes\Fantomes;
 
$loader = new \Twig\Loader\FilesystemLoader('templates'); // définit le rep de stockage des fichiers Twig
$twig = new \Twig\Environment($loader); // crée un objet Twig

$faker = Faker\Factory::create();
// generate data by calling methods

$casper = new Fantomes($faker->name());
$dolly = new Fantomes($faker->name());
$fantome= new Fantomes($faker->name());

$liste = [$casper->getNom(),$dolly->getNom(),$fantome->getNom()];

echo $twig->render('index.twig', ['liste' => $liste]);



