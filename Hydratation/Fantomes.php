<?php

// Chainer des méthodes nous permet d'exécuter plusieurs méthodes d'affilée de façon simple et plus rapide, en les écrivant à la suite les unes des autres, « en chaine ».
// chaque méthode chaînée retourne obligatoirement l’instance de l’objet courant via return $this;

    class Fantomes{

        protected $_nom;
        protected $_couleur;
        protected $_velocite=1;
        protected $_pv=10;
     
        public function __construct($valeurs = array()){
            if(!empty($valeurs))
            $this->hydrate($valeurs);
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
 

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($nom){
            $this->_nom=$nom;
        }

        public function getCouleur(){
            return $this->_couleur;
        }

        public function setCouleur($couleur){
            $this->_couleur=$couleur;
        }

        public function getPV(){
            return $this->_pv;
        }

        public function setPV($pv){
            $this->_pv=$pv;
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