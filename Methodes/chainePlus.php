<?php
// Définissez la classe chainePlus qui contient :

// Une propriété private nommée chaine
// quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules() qui retournent respectivement la chaîne stockée mise en gras, en italique, soulignée et mise en majuscules.

    class chainePlus{

        private $chaine;

        //on récupère l'attribut
        public function getChaine(){
            return $this->_chaine;
        }

        //on donne une nouvelle valeur à l'attribut
        public function setChaine($new_chaine){
            $new_chaine=" ".$new_chaine." ";
            $this->_chaine=$new_chaine;
        }

        public function gras(){
            return 'Gras:<strong>'.$this-> getChaine().'</strong><br>';
        }

        public function italique(){
            return "Italique :<i>".$this-> getChaine()."</i><br>";
        }

        public function souligne(){;
            return "Souligner :<u>".$this-> getChaine()."</u><br>";
        }

        public function majuscule(){
            return "Majuscules :<span style='text-transform:uppercase'>".$this-> getChaine()."</span>";
        }
 
    }

    $ChainePlus = new chainePlus();
    $ChainePlus->setChaine("Programmation orientée objet en PHP");
    echo $ChainePlus->gras();
    echo $ChainePlus -> italique();
    echo $ChainePlus -> souligne();
    echo $ChainePlus -> majuscule();
?>

