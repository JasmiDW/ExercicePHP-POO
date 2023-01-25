<?php
  //  fait le lien entre le modèle et l'affichage (oui, juste ça !).
  // l'index (aussi appelé le contrôleur) qui sert d'intermédiaire entre le modèle et la vue

  require_once('src/model.php');

  function homepage(){
    $posts= getPosts();
    
    require('views/homepage.php');
    
  }
  
?>
