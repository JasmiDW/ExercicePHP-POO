<!-- On ajoute la capacité de changer d’arme.
Un coup avec épée retire 20 points de vie
Un coup avec une dague retire 10 points de vie
Créer un scénario avec une attaque, un changement d’arme.
A chaque tour afficher l’état du personnage (nom, pb) ainsi que l’arme utilisée -->

<?php

    class Personnage{

        private $_pv = 100;
        private $_nom;
        const BLESSURE = 15;

        private $_arme;

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

        public function getArme(){
            return $this->_arme;
        }

        public function setArme($new_arme){
            $this->_arme=$new_arme;

        }

        public function changeArme($arme){
            $this->getArme($arme);

        }

        public function attaquer($cible){
            if ($this->getArme()=="Marteau"){
                $cible->setPV($cible->getPV()-20);
                return $this;
            } else if ($this->getArme()=="Pistolet") {
                $cible->setPV($cible->getPV()-10);
                return $this;
            } else { 
                $cible->setPV($cible->getPV()-self::BLESSURE);
            }
        }

        public function message(){
            return " Je m'appelle ".$this->getNom(). ", j'ai " .$this->getPV()." PV et j'ai cette arme : " .$this->changeArme($this->getArme()). "<br>";
        }

        
    }
?>