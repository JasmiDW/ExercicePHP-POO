<!-- Créer une classe Personnage
Créer 2 personnages. Ceux-ci ont la capacité de se frapper l’un/l’autre. Chaque coup leur retire 15 points de vie (pv). Ils en ont 100 au départ.
Créer un scénario -->

<?php

    class Personnage{

        protected $_pv = 100;
        protected $_nom;
        const BLESSURE = 15;

        public function __construct($nom){
            $this->setNom($nom);

        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($new_nom){
            $this->_nom=$new_nom;

        }
        public function getPV(){
            return $this->_pv;
        }

        public function setPV($new_pv){
            $this->_pv=$new_pv;

        }

        public function perdPV(){
            $this->setPV($this->getPV()-self::BLESSURE); 
        }

        public function attaquer($cible,$cb){
            $cible->perdPV($cb);

        }

        public function message(){
            return " Je m'appelle ".$this->getNom(). ", j'ai " .$this->getPV()." PV<br>";
        }
    }
?>