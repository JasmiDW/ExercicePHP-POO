<?php 
// Un constructeur est une méthode spéciale de la classe qui s'exécute automatiquement lorsque vous créez une nouvelle instance de cette classe. La méthode constructeur est utilisée pour initialiser l'objet, c'est à dire pour donner des valeurs par défaut aux propriétés de l'objet, pour vérifier que toutes les conditions nécessaires sont remplies pour que l'objet fonctionne correctement ou pour effectuer d'autres opérations de configuration.

    class Voiture{
        
        //ajouter des underscores pour rendre privés les attributs
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

        public function __construct($nom,$annee){
            $this->setNom($nom);
            $this->setAnnee($annee);
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

    $total=new Voiture("Jaguard", 1970);
    echo $total->message();

    $total2=new Voiture("308", 2010);
    echo $total2->message();

?>

