<!-- CREATION D'UN POSTCONTROLLER : 
qui manage une ressource, la ressource ici c'est le post. Une ressource peut être listé (via l'action index), affiché (via l'action show), crée, mis à jour et supprimé.
Post::all() et Post::find() font référence au modèle Post donc quand on va chercher les posts, on souhaite que tous les posts ressemblent au modèle Post -->


<?php
  class PostsController {
    
    public function index() {
      // we store all the posts in a variable
      $posts = Post::all();
      require_once('views/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Post::find($_GET['id']);
      require_once('views/posts/show.php');
    }

    public function delete(){
      $post = Post::delete($_GET['id']);
      require_once('views/posts/delete.php');
    }

  }
?>