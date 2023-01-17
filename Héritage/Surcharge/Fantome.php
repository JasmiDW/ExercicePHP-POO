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
    
?>