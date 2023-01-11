<?php
// Ceux-ci ont : un nom, une couleur, une vélocité (de 1 à 3), un nombre de points de vies.

// Vous devez pouvoir en créer plusieurs, créer une fonction manger permettant d’augmenter leur nombre de points, une autre permettant de le diminuer. Attention à 0, le fantôme sera mort.

// Vélocité vaut 1 par défaut et ils ont 10 points de vie (pv) par défaut.

// Voici une séquence d’instructions à mettre en place :

// créer Clyde de couleur jaune et Dolly de couleur rose.
// Dolly prends 10 pv sa vélocité passe à 2. Clyde en perds 5, clyde en perds 10
// etc etc


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

        public function boire($potion){
            //on attribut à setPV la valeur récupérée dans getPV() + la valeur potion et on retourne la valeur entière pour la function
            // Le setter, setPV(), permet de changer la valeur de la propriété PV.
            $this->setPV($this->getPV() + $potion);
        }

        public function perdre($blessure){
            $this->setPV($this->getPV()-$blessure);
        
        }
        
        public function message(){
            if($this->getPV() < 0){
                return "".$this->getNom().", le petit fantome ".$this->getCouleur(). " est mort :(<br>";
            }else{
                //on récupere la nouvelle valeur de getPV() établit après la fonction boire()
                // Cette méthode est un getter qui permet de lire la valeur de la propriété PV sans pouvoir la modifier.
                return "".$this->getNom(). ", le petit fantome ".$this->getCouleur()." a ".$this->getPV(). " PV et ".$this->getVelocite()." en vélocité.<br>";
            }

        }
}
    $dolly=new Fantomes("Dolly","rose");
    $dolly->boire(11);
    $dolly->setVelocite(2);
    echo $dolly->message();

    $clyde=new Fantomes("Clyde","jaune");
    $clyde->perdre(5);
    $clyde->perdre(10);
    echo $clyde->message();

    
?>