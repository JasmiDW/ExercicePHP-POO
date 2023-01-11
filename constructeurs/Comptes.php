<?php
// a) Créez une classe de gestion de compte bancaire permettant de faire un dépôt, un retrait et d’afficher le solde d’un compte. Le solde est initialisé à 0.

// Créez deux comptes (John, Marylin) que vous affectez à deux variables.

// Ecrivez le code correspondant aux opérations suivantes :

// dépôt de 500 euros sur le compte de John.
// dépôt de 1000 euros sur le compte de Marylin.
// retrait de 10 euros sur le compte de Marylin.
// affichage des soldes des deux comptes.
// b) écrire une méthode permettant à John de faire un virement de 75 euros à Marylin

    class GestionCompte{

        private $_nom;
        private $_solde=0;

        public function __construct($nom){
            $this->setNom($nom);
        }

        public function getNom(){
            return $this->_nom;
        }

        public function setNom($nom){
            $this->_nom= $nom;
        }

        public function getSolde(){
            return $this->_solde;
        }

        public function setSolde($solde){
            $this->_solde = $solde;
        }

        public function depot($billet){
            $this->setSolde($this->getSolde()+$billet);
        }

        public function retrait($billet){
            $this->setSolde($this->getSolde()-$billet);
        }

        public function calculSolde(){
            $this->setSolde(getSolde()+$this->getDepot());
        }
        //création d'une fonction pour établir un retrait entre les deux comptes via un destinataire et un montant à déterminer. 
        public function virement($destinataire, $montant){
        // il y a un retrait du montant choisi d'un compte
            $this->retrait($montant);
        //qui donne lieu à un depot chez le destinataire
            $destinataire->depot($montant);
        }

        public function message(){
            return "Le compte bancaire de ".$this->getNom(). " a un solde de ".$this->getSolde(). " euros.<br>";
        }

    }

    $john = new GestionCompte("John");
    $john->depot(500);
    $john ->retrait(0);
    echo $john->message();

    $marylin = new GestionCompte("Marylin");
    $marylin ->depot(1000);
    $marylin ->retrait(10);
    echo $marylin ->message();

    $john->virement($marylin, 75);
    echo $john->message();
    echo $marylin ->message();

?>