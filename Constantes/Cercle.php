<?php
    class Cercle{

        const PI = 3.14;
        private $_diametre;

        public function __construct($diametre){
            $this->setDiametre($diametre);

        }

        public function getDiametre(){
            return $this->_diametre;
        }

        public function setDiametre($new_diametre){
            $this->_diametre=$new_diametre;

        }

        public function calculPerimetre(){
            //on retourne la constante et la valeur récupérée pour la propriété diametre
            $diametre = self::PI * $this->_diametre;
            return $diametre;
        }

        public function message(){
            return "Le cercle de diametre " .$this->getDiametre(). " cm a un périmetre de " .$this->calculPerimetre(). "cm";
        }

    }

    $cercle = new Cercle(10);
    echo $cercle-> message();

?>