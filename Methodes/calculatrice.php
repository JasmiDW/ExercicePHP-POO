<?php 
// Créer une classe calculatrice qui contiendra une méthode addition Faire le calcul permettant d’additionner 5 et 10. Ecrire le résultat. Vous pouvez dans un premier temps, faire cet exercice sans attributs et sans getter/setter. Puis intégrer ces concepts.

    class Calculatrice{
        
        private $addition;

         //get récupère l'attribut
        public function getTotal(){
            return $this->_addition;
        }
   
         //set donne la valeur à l'attribut
        public function setTotal($valeur){
            $this ->_addition=$valeur;
        }
        
        public function addition($chiffre1,$chiffre2){
            $calcul = $chiffre1+$chiffre2;
            // echo $calcul;
            $this -> setTotal($calcul);
        }

        
    }

    $Total=new Calculatrice;
    $Total->addition(5,10);
    echo $Total->getTotal();
?>
