<!-- Dans la class Fantome, ajouter une méthode ditBonjour qui renvoie le texte “Bonjour”.
Dans une autre classe Poltergeist, hériter de fantômes et surcharger cette méthode par un texte "Guten Tag".
Chaque classe peut créer des attributs et méthodes qui lui sont propres. Grâce à l’héritage, on peut remplacer les instructions d’une méthode parente par celles de sa propre méthode. Les méthodes auront exactement le même nom. On parle de réécrire, redéfinir ou de surcharger. -->

<?php

    class Fantome{

        private $_type;

         //set donne la valeur à l'attribut
        public function setType($new_type){
            $this ->_type=$new_type;
        }

        public function getType(){
            return $this->_type;
        }

        public function parler(){
            return "Le ".$this-> getType()." dit : Bonjour ! <br>";
        }

    }

    class Poltergeist extends Fantome {

        public function parler(){
            return "Le ".$this-> getType()." dit : Guten Tag ! <br>";
        }
    }


    $ghost = new Poltergeist();//on instancie la classe
    $ghost-> setType("fantome");
    echo $ghost-> parler();

?>
