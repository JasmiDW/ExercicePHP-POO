<?php

// Chainer des méthodes nous permet d'exécuter plusieurs méthodes d'affilée de façon simple et plus rapide, en les écrivant à la suite les unes des autres, « en chaine ».
// chaque méthode chaînée retourne obligatoirement l’instance de l’objet courant via return $this;

    class Fantomes{

        private $_nom;
        private $_couleur;
        private $_velocite=1;
        private $_pv=10;

        public function __construct($nom,$couleur){
            $this->setNom($nom);
            $this->setCouleur($couleur);

        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($nom){
            $this->_nom=$nom;
            // retourne l’objet afin que la méthode suivante s’exécute
            return $this;
        }

        public function getCouleur(){
            return $this->_couleur;
        }

        public function setCouleur($couleur){
            $this->_couleur=$couleur;
            // retourne l’objet afin que la méthode suivante s’exécute
            return $this;
        }

        public function getPV(){
            return $this->_pv;
        }

        public function setPV($pv){
            $this->_pv=$pv;
            // retourne l’objet afin que la méthode suivante s’exécute
            return $this;
        }

        public function getVelocite(){
            return $this->_velocite;
        }

        public function setVelocite($velocite){
            $this->_velocite=$velocite;
            // retourne l’objet afin que la méthode suivante s’exécute
            return $this;
        }

        public function boire($potion){
            $this->setPV($this->getPV() + $potion);
            return $this;
        }

        public function perdre($blessure){
            $this->setPV($this->getPV()-$blessure);
            return $this;
        
        }
        
        public function message(){
            if($this->getPV() < 0){
                echo "".$this->getNom().", le petit fantome ".$this->getCouleur(). " est mort :(<br>";
            }else{
                echo "".$this->getNom(). ", le petit fantome ".$this->getCouleur()." a ".$this->getPV(). " PV et ".$this->getVelocite()." en vélocité.<br>";
            }

        }
    }
?>