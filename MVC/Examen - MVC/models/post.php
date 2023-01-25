<!-- CREATION DU MODELE POST : -->


<?php
  class Post {
    
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $title;
    public $content;
    public $date;

    public function __construct($id, $title, $content, $date) {
      $this->id      = $id;
      $this->title  = $title;
      $this->content = $content;
      $this->date = $date;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM article');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['titre'], $post['description_article'], $post['date_article']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM article WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['titre'], $post['description_article'], $post['date_article']);
    }

    public static function delete($id){
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $id=$_GET["id"];
      $query=$bdd->prepare("DELETE FROM article WHERE id= :id");
      $query->bindValue(':id',$id, PDO::PARAM_INT);
      $query->execute();

      return "$id a bien été supprimée de la base de données.";
    }
  }
?>