<!-- CREATION DU MODELE POST : -->


<?php
require_once('post.php');

  class Post_manager{

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req=$db->prepare('SELECT * FROM article');
      $req->execute();
      $results=$req->fetchAll(PDO::FETCH_ASSOC);
     // var_dump($results);
      // we create a list of Post objects from the database results
      foreach($results as $post) {
          //var_dump($post);
        $list[] = new Post($post);
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
      $post = $req->fetch(PDO::FETCH_ASSOC);

      return new Post($post);
    }


    public static function delete($id){
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);

      $req=$db->prepare("DELETE FROM article WHERE id= :id");
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return "$id a bien été supprimée de la base de données.";
    }

    public static function add(){
        $db = Db::getInstance();
        $title = $_POST["titre"];
        $content = $_POST["description"];
        $date = $_POST["date"];
        $query=$db->prepare("INSERT INTO article (titre, description_article,date_article, id_user) 
          VALUES(:titre,:description_article, :date_article, :id_user)");
          $id= $_POST["id_user"];
          //On indique les bindValue du nom et du mot de passe
          $query->bindValue(':titre',$title,PDO::PARAM_STR);
          $query->bindValue(':description_article',$content);
          $query->bindValue(':date_article',$date,PDO::PARAM_STR);
          $query->bindValue(':id_user',$id,PDO::PARAM_INT);
          $query->execute();

        $post = new Post($id, $title, $content, $date);
        return $post;     
    }

    public static function update($id){

        $id = $_GET['id'];

        // créer une requête SELECT pour récupérer les données de l'article
        $db = Db::getInstance();
        $requete = $db->prepare("SELECT titre, description_article, date_article FROM article WHERE id = :id");
        $requete->bindValue(':id', $id, PDO::PARAM_INT);
        $requete->execute();
        $result = $requete->fetch(PDO::FETCH_ASSOC);

        // stocker les données récupérées dans des variables
        $title = $result['titre'];
        $content = $result['description_article'];
        $date = $result['date_article'];

        $requete=$db->prepare("UPDATE article
          SET titre =:titre, description_article = :description_article, date_article = :date_article
          WHERE id=:id");
          $id = $_GET["id"];
          $title = $_POST["titre"];
          $content = $_POST["description"];
          $date= $_POST["date"];

          $requete->bindValue(':titre',$title, PDO::PARAM_STR);
          $requete->bindValue(':description_article',$content, PDO::PARAM_STR);
          $requete->bindValue(':date_article',$date, PDO::PARAM_STR);
          $requete->bindValue(':id',$id, PDO::PARAM_INT);

          $requete->execute();

          $post = new Post($result);
          return $post; 

    }
}
?>