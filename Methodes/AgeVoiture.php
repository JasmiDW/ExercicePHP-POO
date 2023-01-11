<?php 
// Créer une classe permettant d’afficher l’âge d’une voiture sachant qu’on a :

// Une jaguar de 1970
// Une 308 de 2010
// Utiliser un attribut pour le nom de la voiture et un attribut pour son année d’immatriculation

    class AgeVoiture{
        
        //ajouter des underscores pour rendre priver les attributs
        private $_nom;
        private $_annee;
        
        public function getAnnee(){
            return $this->_annee;
        }

        public function setAnnee($new_annee){
            $this->_annee=$new_annee;
        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($new_nom){
            $this->_nom=$new_nom;
        }
        // une fonction doit seulement faire une seule chose
        public function calculAge(){
            $age = date('Y') - $this -> getAnnee();
            return $age;
        }

        public function message(){
            return "La ".$this->getNom(). " a ".$this->calculAge(). " ans<br>";
        }
    }

    $total=new AgeVoiture();
    $total->setAnnee(1970);
    $total->setNom("Jaguard");
    echo $total->message();

    $total2=new AgeVoiture();
    $total2->setAnnee(2010);
    $total2->setNom("308");
    echo $total2->message();

?>