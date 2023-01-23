<!-- Créer une classe Personnage, qui devra être capable de :

Créer des personnages. Ils doivent avoir un pseudo, le niveau doit être initialisé à 1, leur niveau de compétences aussi, et leur vie à 100, et leur point de mana à 100 aussi.
Cette classe devra pouvoir :
ajouter de la vie à un de vos personnages via boirePotionDeVie (int quantite)
attaquer un autre personnage (n utilisant les dégâts de l'arme).
dire si le personnage est vivant
afficher l’état du personnage.
Attention, pas de point de vie négatifs !

Ensuite, créer une classe arme, qui créera des armes : nom et attaque (le nombre de dégâts qu'elle cause) Et une méthode changer pour qu'un personnage puisse changer d'arme!

Ensuite, créer une sous classe Magicien qui héritera de Personnage qui pourra en plus, lancer des sortilèges. Par contre il sera équipé qu'un bâton qui fera moins de dégâts qu'une épée. (logique)

Enfin, créer une classe guerrier qui aura une méthode taper à l'épée, une autre qui renverra vrai ou faux s'il est sur son cheval, ... , rien ne vous empêche d'inventer de nouvelles fonctionnalités à vos classes, et oui, vous devriez avoir un esprit imaginatif ! -->

<?php
    class Personnage{

        protected $_nom;
        protected $_lvl = 1;
        protected $_skill = 1;
        protected $_pv = 100;
        protected $_mana = 100;
        protected $_arme;
        protected $_statut="OP";

        public function __construct($nom){
            $this->setNom($nom);
            $this->setArme(new Arme("AUTO-ATTAQUE", 5));

        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($new_nom){
            $this->_nom=$new_nom;

        }

        public function getLvl(){
            return $this->_lvl;
        }

        public function setLvl($new_lvl){
            $this->_lvl=$new_lvl;

        }

        public function getSkill(){
            return $this->_skill;
        }

        public function setSkill($new_skill){
            $this->_skill=$new_skill;

        }

        public function getPV(){
            return $this->_pv;
        }

        public function setPV($new_pv){
            $this->_pv=$new_pv;
            return $this;

        }

        public function getMana(){
            return $this->_mana;
        }

        public function setMana($new_mana){
            $this->_mana=$new_mana;

        }

        public function getArme(){
            return $this->_arme;
        }

        public function setArme($new_arme){
            $this->_arme=$new_arme;
            return $this;

        }

        public function getStatut(){
            return $this->_statut;
        }

        public function setStatut($new_statut){
            $this->_statut=$new_statut;

        }

        // ajouter de la vie à un de vos personnages via boirePotionDeVie (int quantite)
        public function drink($quantity){
            $this->setPV($this->getPV() + $quantity);
        }

        // attaquer un autre personnage (n utilisant les dégâts de l'arme).
        public function battle($cible){

            $infoArme=$this->getArme();
            $degat=$infoArme->getDegat();
            $cible->setPV($cible->getPV()-$degat);

        }

        public function changeArme($new_arme){
            $this->_arme=$new_arme;
            return $this;

        }

        public function message(){
            if ($this->getPV() <= 0){
                return " ".$this->getNom(). " est mort.";
            } else {
                return " ".$this->getNom(). " est ".$this->getStatut()." lance ".$this->getArme()->getNom()." et enlève " .$this->getArme()->getDegat()." PV. Il a ".$this->getPV()." PV. <br>";

            }
        }
    }

?>