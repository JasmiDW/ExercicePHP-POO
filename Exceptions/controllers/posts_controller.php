<!-- CREATION D'UN POSTCONTROLLER : 
qui manage une ressource, la ressource ici c'est le post. Une ressource peut être listé (via l'action index), affiché (via l'action show), crée, mis à jour et supprimé.
Post::all() et Post::find() font référence au modèle Post donc quand on va chercher les posts, on souhaite que tous les posts ressemblent au modèle Post -->


<?php

  class PostsController {
    
    public function index() {
      // we store all the posts in a variable
      $posts = Post_manager::all();
      require_once('views/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post_manager::find($_GET['id']);
      require_once('views/posts/show.php');
    }

    public function delete(){
      $id=$_GET["id"];
      $post = Post_manager::delete($id);
      require_once('views/posts/delete.php');
    }

    public function add(){

      require_once('views/posts/add.php');
    }

    public function add_traitement(){
      if (isset($_POST["titre"]) && isset($_POST["description"]) && isset($_POST["date"])){
        if (!empty($_POST["titre"]) && !empty($_POST["description"]) && !empty($_POST["date"])){
          try {
              $post = Post_manager::add();
              // Si la création du post s'est bien passée, on peut rediriger vers la vue de confirmation
              $title= $post ->getTitre();
              require_once('views/posts/add_traitement.php');
          } catch (Exception $e) {
            // Si une exception est levée, on peut gérer l'erreur ici
            echo $e->getMessage();
          }
        } else {
          echo "Veuillez remplir tous les champs requis.";
        }
      } else {
        echo "Des erreurs sont survenues dans les données du formulaire.";
      }
    }

    public function update(){
      $id = $_GET['id'];
      if(!isset($_GET['id']))
        return call('pages','error');
 
      $post = Post_manager::find($_GET['id']);
      require_once('views/posts/update.php');

    }

    public function update_traitement(){
      $id = $_GET['id'];
      if(!isset($_GET['id']))
        return call('pages','error');

      $post = Post_manager::update($id);
      $title= $post ->getTitre();
      require_once('views/posts/update_traitement.php');
    }
  }
?>