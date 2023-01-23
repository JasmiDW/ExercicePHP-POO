<?php

    class Arme{

        private $_nom;
        private $_degat;

        public function __construct($nom,$degat){
            $this->setNom($nom);
            $this->setDegat($degat);

        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($new_nom){
            $this->_nom=$new_nom;

        }

        public function getDegat(){
            return $this->_degat;
        }

        public function setDegat($new_degat){
            $this->_degat=$new_degat;
            return $this;

        }

    }

?>