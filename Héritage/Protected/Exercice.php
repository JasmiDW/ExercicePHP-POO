<?php

    // quand protected l'enfant peut accéder et modifier les propriétés de la class mais le code à l'extérieur ne pourra pas. Utilisation de protected quand tu veux donner l'acces à une class parent et son enfant mais pas pour les autres class. Private quand on veut mettre en restriction l'accés à une class et seulement à cette class.  


    class User{
        //error_reporting(E_ALL);

        protected $Name;
        
        public function __construct(){
            $this->Name = 'Gerard';
        }
    }

    class Admin extends User{
        public function afficherNom(){
            echo $this->Name; 
        }
    }

    $obj = new Admin;
    //en protected 
    echo $obj->afficherNom();


?>
