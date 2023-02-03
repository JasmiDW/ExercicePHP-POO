<?php 

namespace Djoul\Fantomes; 

    class Fantomes {
        
        public $_nom;

        public function __construct($nom){
            $this->setNom($nom);
        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($nom){
            $this->_nom=$nom;
        }
    }