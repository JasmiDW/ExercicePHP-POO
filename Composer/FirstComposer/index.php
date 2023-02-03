<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates'); // définit le rep de stockage des fichiers Twig
$twig = new \Twig\Environment($loader); // crée un objet Twig

$faker = Faker\Factory::create();
// generate data by calling methods

echo $twig->render('index.twig', [
    'nom' => $faker->name(),
    'navigation' => [
      ['href' => "/accueil", 'caption' => "Accueil"],
      ['href' => "/contact", 'caption' => "Contact"],
      ['href' => "/a-propos", 'caption' => "À propos"]
    ]
  ]);


?>