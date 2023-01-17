<!-- Créez un fichier Parallelogramme.php

Dans ce fichier : Créez une classe Parallélogramme avec des propriétés privées 'longueur' et 'largeur' et leurs accesseurs (set, get) Des méthodes 'getPerimetre' et 'getAire' de la classe Parallélogramme qui renvoient respectivement le périmètre et l'aire du Parallélogramme.

Le constructeur initialisera les attributs.

Créez un fichier heritage_scenario.php

Dans ce fichier, créez un objet $rectangle et affichez son périmètre et son aire

Créez un fichier Carre.php

Dans ce fichier : Créez une classe 'Carre' qui hérite de la classe Parallélogramme

Surchargez le constructeur : déclarez un constructeur __construct($cote) qui fait appel à celui de rectangle grâce au mot clé parent::__construct($long, $larg)

Dans le fichier de scenario utilisé pour $rectangle, créez un objet $carre et affichez son périmètre et son aire, hérité de rectangle -->

<?php 

    class Parallelogramme{

        private $_longueur;
        private $_largeur;

        // IMPORTANT : plus besoin des setter après, car passés à la construction de l'objet.
        public function __construct($longueur,$largeur){
            $this->setLongueur($longueur);
            $this->setLargeur($largeur);
        }

        public function getLongueur(){
            return $this->_longueur;
        }
   
        public function setLongueur($new_longueur){
            $this ->_longueur=$new_longueur;
        }

        public function getLargeur(){
            return $this->_largeur;
        }

        public function setLargeur($new_largeur){
            $this ->_largeur=$new_largeur;
        }

        public function getPerimetre(){
            $calculP = ($this->getLongueur()*$this->getLargeur()) + 2;
            return $calculP;
        }

        public function getAire(){
            $calculA = ($this->getLongueur()*$this->getLargeur());
            return $calculA;
        }

        public function message(){
            return "Le parallélogramme de ".$this->getLongueur(). " cm en longueur et ".$this->getLargeur(). " cm en largeur, a un périmètre de " .$this->getPerimetre(). " cm et un aire de ".$this->getAire()." cm2 <br>";
        }
    }

    
?>