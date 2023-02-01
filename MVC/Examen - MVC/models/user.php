<?php
  class User {
    
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $user;
    public $password;
    public $mail;
    public $role;

    public function __construct($id, $user, $password, $mail) {
      $this->id      = $id;
      $this->user  = $user;
      $this->password = $password;
      $this->mail = $mail;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM user');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $user) {
        $list[] = new User($user['id_user'], $user['user'], $user['mdp'], $user['mail'], $user['role']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM user WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new User($user['id_user'], $user['user'], $user['mdp'], $user['mail'], $user['role']);
    }

    // public static function delete($id){
    //   $db = Db::getInstance();
    //   // we make sure $id is an integer
    //   $id = intval($id);
    //   $id=$_GET["id"];
    //   $query=$bdd->prepare("DELETE FROM article WHERE id= :id");
    //   $query->bindValue(':id',$id, PDO::PARAM_INT);
    //   $query->execute();

    //   return "$id a bien été supprimée de la base de données.";
    // }
  }
?>