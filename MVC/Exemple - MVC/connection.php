<!-- Class singelton qui créé une seule et même instance de bdd pour toutes les demandes de l'application  -->


<?php
  class Db {
    private static $instance = NULL;
    // ces functions sont privées pour que personne d'autre n'appellent une nouvelle base de données
    private function __construct() {}

    private function __clone() {}
    // il y a une variable $instance pour sauvegarder la connexion PDO et comme ça on a accés à la connexion via la class Db qui retourne elle-même la fonction getInstance()
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '', $pdo_options);
      }
      return self::$instance;
    }
  }
?>