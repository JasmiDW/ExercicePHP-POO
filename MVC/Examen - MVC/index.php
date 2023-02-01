<!-- 1ère étape : RECUPERATION DE LA BDD
 on récupére la bdd via une class singleton (dans connection.php) qu'on appelle -->


<?php
  require_once('connection.php');

  
  //on vérifie que les parametres controller et action existent dans des variables. Si non, on établit pages comme le controller par défaut et home comme l'action par défaut. Toutes requetes demandées dans la page Index.php va être dirigé vers un controller (un fichier définissant une class) et une action qui se trouve dans ce controller (une méthode).

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'posts';
    $action     = 'index';
  }
  //on appelle la seule partie de l'application qui ne change pas : le layout.
  require_once('views/layout.php');
?>