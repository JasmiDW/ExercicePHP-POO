<?php

  class CompteurFantomes {

    public static $CompteurFantomes = 0;
    public function __construct(){

      self::$CompteurFantomes++;

    }

    public static function getCompteurFantomes(){

          return self::$CompteurFantomes;

    }

    public function message(){

      return "Il y a " .self::$CompteurFantomes. " fantomes en tout.";

    }
  }

?>