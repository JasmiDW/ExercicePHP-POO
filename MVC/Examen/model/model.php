<?php
//  se connecte à la base de données et récupère les billets.
    function getPosts(){

        require_once 'bdd.php';

        $req = "SELECT id, titre, description_article, date_article
                FROM article";
    // On fait la requête à partir de la BDD
        $statement=$database->query($req);

        $posts = [];
        while ($row = $statement->fetch()){
            $post = [
            'title' => $row['titre'],
            'content' => $row['description_article'],
            'date' => $row['date_article'],
            'id' => $row['id'],
            ];

            $posts[]=$post;
        }
        return $posts;
    }

    function getOnePost(){
        require_once 'bdd.php';

        $id=$_GET['id'];


        $req=$database->prepare("SELECT * from article
            WHERE id = :id");

        $req->bindValue(':id',$id, PDO::PARAM_STR);
        $req->execute();

        return $req;
        
    }


?>


