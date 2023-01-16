<?php

    class Manager{
        // Instance de PDO
        private $_bdd;

        public function __construct($bdd){
            $this->setBdd($bdd);
        }

        public function setBdd($bdd) {
                    $this->_bdd = $bdd;
                }

        public function add($fantomes) {
            $req = $this->_bdd->prepare('INSERT INTO infos (nom, couleur, pv, velocite, id)
                                    VALUES (:nom, :couleur, :pv, :velocite, :id)');

            $req->execute(array(
                'nom' => $fantomes->getNom(),
                'couleur' => $fantomes->getCouleur(),
                'pv' => $fantomes->getPV(),
                'velocite' => $fantomes->getVelocite(),
                'id' => $fantomes->getID()
            ));
        }
    }

?>