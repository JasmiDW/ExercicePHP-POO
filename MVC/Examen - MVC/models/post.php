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

    public function getTitle() {
      return $this->title;
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
      $result = $requete->fetch();

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

        $post = new Post($id, $title, $content, $date);
        return $post; 

  }
}
?>