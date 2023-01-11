<?php 
// Créer une classe permettant d’afficher l’âge d’une voiture sachant qu’on a :

// Une jaguar de 1970
// Une 308 de 2010
// Utiliser un attribut pour le nom de la voiture et un attribut pour son année d’immatriculation

    class AgeVoiture{

        private $nom;
        private $annee;
        
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

    $Total=new AgeVoiture();
    $Total->setAnnee(1970);
    $Total->setNom("Jaguard");
    echo $Total->message();

    $Total2=new AgeVoiture();
    $Total2->setAnnee(2010);
    $Total2->setNom("308");
    echo $Total2->message();

?>