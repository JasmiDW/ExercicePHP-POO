<!-- FICHIER ROUTES.PHP : 
ce fichier doit sortir l'html qui a été demandé d'une manière ou d'une autre. pour chercher le bon fichier views (qui contient ce dont on a besoin) on a deux choses : un nom de controller et un nom d'action.
On écrit une function call qui va prendre ces deux arguments et appeler l'action du controller comme réalisé dans l'exemple du code précédent  -->

<!-- 6eme ETAPE : AMELIORATION AVEC DES MODELES ET DU MANAGEMENT DE DATA
on veut interroger la bdd et afficher les résultats, aller chercher la listes des articles et les afficher, même chose pour un post en particulier  -->



<?php
  function call($controller, $action) {
// fonction qui charge le fichier controller approprié et l'instancie pour ensuite appelé la méthode correspondante à l'action donnée.

    // charge le fichier controller approprié
    require_once('controllers/' . $controller . '_controller.php');


    //switch pour vérifier le nom du controller et instancier l'objet controller approprié. Exemple : si le nom du controller est pages, l'objet crée sera une instance de la classe PageController
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }
    // une fois l'objet instancié il appelle la méthode correspondante à l'action donnée sur l'objet controller
    $controller->{ $action }();
  }
  // we're adding an entry for the new controller and its actions
  // vérification du nom du controller et de l'action donné en parametre sont valides en les comparant avec un tableau de controleurs et d'actions valides. 
  $controllers = array('pages' => ['home', 'error', 'connexion','inscription'],
                       'posts' => ['index', 'show','delete', 'update','add','add_traitement','update_traitement'],
                       'users' => ['profil', 'error']);
  
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>