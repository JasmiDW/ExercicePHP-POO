<?php

// Ensuite, créer une sous classe Magicien qui héritera de Personnage qui pourra en plus, lancer des sortilèges. Par contre il sera équipé qu'un bâton qui fera moins de dégâts qu'une épée. (logique)

    class Support extends Personnage {

        public function transform($cible){
            $cible->setStatut("FREEZE");
        }

        public function infos(){
            if($this->getStatut() == "FREEZE"){
                return "".$this->getNom()." est devenu une jolie petite créature sans défense.<br>";
            }else{
                return  "".$this->getNom(). " attaque : TRANSMOLUGATE ! .<br>";
            }
        }
    }
?>
