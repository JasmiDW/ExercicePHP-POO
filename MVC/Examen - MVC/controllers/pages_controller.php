<!-- 4eme étage : CREATION D'UN CONTROLLER
 dans ce controller il y a deux fonctions publiques home et error 
dans la première fonction se trouve des variables. Ainsi on pourra sortir leurs valeurs dans les fichiers views et ainsi ne pas surcharger la view avec différentes variables et autres choses qui ne sont pas en rapport avec html

Le nom d'une view est défini selon le nom de son action que l'on range en dessous du nom du controller -->


<?php

  class PagesController {
    
    public function home() {

      require_once('views/pages/home.php');
    }

    public function connexion(){
      require_once('views/pages/connexion.php');
    }

    public function inscription(){
      require_once('views/pages/inscription.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }

  }
?>