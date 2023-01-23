<!-- Créer une classe ballon.

Cette classe contient :

Attributs : couleur et nom
Méthodes : constructeur, getters et setters, getInfos et changeCouleur
Créer un scénario permettant de :

créér un ballon rouge qui s’appelle Bob
créer un ballon bleu qui s’appelle Toby
Toby change Bob en vert via héritage
Afficher les états à chaque changement. -->

<?php

    class Ballon {

        protected $_nom;
        protected $_couleur;

        public function __construct($nom,$couleur){
            $this-> setNom($nom);
            $this->setCouleur($couleur);
        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($new_nom){
            $this->_nom=$new_nom;

        }
        public function getCouleur(){
            return $this->_couleur;
        }

        public function setCouleur($new_couleur){
            $this->_couleur=$new_couleur;

        }
        public function __toString(){
            return "Le ballon " .$this-> getCouleur(). " s'appelle " .$this->getNom(). ".<br>";
        }

        public function changeCouleur($cible,$couleur){
            $cible->setCouleur($couleur);
        }


    }

?>