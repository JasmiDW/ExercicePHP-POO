<?php

  class Post {
    
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $title;
    public $content;
    public $date;

    public function __construct($value = array()){
      if(!empty($value))
      $this->hydrate($value);
  }

  public function hydrate($donnees){
      foreach ($donnees as $key => $value){
      // On récupère le nom du setter correspondant à l'attribut.
      $method = 'set'.ucfirst($key);
      // Si le setter correspondant existe.
      if (method_exists($this, $method)){
          // On appelle le setter.
          $this->$method($value);
      }else{
          echo $method." introuvable";
      }
      }
  }

    // public function __construct($id, $title, $content, $date) {
    //   $this->id      = $id;
    //   $this->title  = $title;
    //   $this->content = $content;
    //   $this->date = $date;
    // }

    public function getTitre() {
      return $this->title;
    }

    public function setTitre($title){
        $this->title=$title;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getDescription_article(){
        return $this->content;
    }

    public function setDescription_article($content){
        $this->content=$content;
    }

    public function getDate_article(){
        return $this->_date;
    }

    public function setDate_article($date){
        $this->_date=$date;
    }

  }
?>