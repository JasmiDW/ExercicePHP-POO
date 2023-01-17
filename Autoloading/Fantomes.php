

<?php

    class Fantomes{
        
        protected $_nom;
        protected $_couleur;
        protected $_velocite;
        protected $_pv;
        protected $_id;

        public function __construct($valeurs = array()){
            if(!empty($valeurs))
            $this->hydrate($valeurs);
        }
        
        //HYDRATATION\\
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
        }

        public function getID(){
            return $this->_id;
        }

        public function setID($id){
            $this->_id=$id;
        }

        // public function message(){
        //     echo "".$this->getNom(). ", le petit fantome ".$this->getCouleur()." a ".$this->getPV(). " PV, ".$this->getVelocite()." en vélocité et " .$this->getID(). " en ID.<br>";
        //     }  

    }
?>