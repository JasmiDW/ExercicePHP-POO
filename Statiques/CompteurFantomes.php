<?php

  class CompteurFantomes {

    public static $CompteurFantomes = 0;
    public function __construct(){

      self::$CompteurFantomes++;

    }

    public static function add($fantomes){
      $this->fantomes[] = $fantomes;
          return self::$CompteurFantomes;

    }

    public function message(){

      return "Il y a " .self::$CompteurFantomes. " fantomes en tout.";

    }
  }

?>