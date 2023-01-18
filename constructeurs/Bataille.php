<!-- Ecrire le scénario suivant

Gandalf à 100 Points de Vie, Frodon avec 2 PV.

Gandalf attaque Frodon, et le tue en lui enlevant 10 PV.

Gandalf gagne 1 point d'expérience.

Donner l'état de chaque personnage.

Attributs : PV, Nom, Xp

Méthodes : Constructeur, getters/setters, Attaquer, etatPerso -->

<?php
    class Bataille{
        
        private $_nom;
        private $_pv;
        private $_xp;

        public function __construct($nom,$pv){
            $this->setNom($nom);
            $this->setPV($pv);
        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($nom){
            $this->_nom= $nom;
        }

        public function getPV(){
            return $this->_pv;
        }

        public function setPV($pv){
            $this->_pv= $pv;
        }

        public function getXP(){
            return $this->_xp;
        }

        public function setXP($xp){
            $this->_xp= $xp;
        }

        public function perdsPV($force){
            $this->setPV($this->getPV()-$force); 
        }
        //on détermine l'adversaire dans la fonction directement, fonction qui sera appelée plus tard en appelant plus précisément l'adversaire et les attributs qui lui appartient
        public function attaquer($adversaire,$cb){
            //détermine que l'adversaire recoit la function perdsPV()
            $adversaire->perdsPV($cb);
        }

        public function message(){
            if ($this->getPV() <=0){
                return "".$this->getNom().", le hobbit est mort :(<br>";
            }else {
            return "Les PV de ".$this->getNom(). " sont de ".$this->getPV(). " PV.<br>";
            }
        }
    }

    $gandalf= new Bataille("Gandalf",100);
    $frodon=new Bataille("Frodon",2);
    $gandalf->attaquer($frodon,10);
    echo $gandalf->message();
    echo $frodon->message();

?>