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

        public function getID($id){
            $req= $this->_bdd->prepare("SELECT * 
                                        FROM infos
                                        WHERE id = $id");
            $req->execute();
            return $req->fetch(PDO::FETCH_ASSOC);
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

        public function update($fantomes) {

            $req = $this->_bdd->prepare("UPDATE infos
                    SET nom= :nom, couleur = :couleur, pv = :pv, velocite = :velocite
                    WHERE id =:id");
    
            $req->execute(array(
                'nom' => $fantomes->getNom(),
                'couleur' => $fantomes->getCouleur(),
                'pv' => $fantomes->getPV(),
                'velocite' => $fantomes->getVelocite(),
                'id' => $fantomes->getID()
                ));
        }

        public function delete($id) {
            $req = $this->_bdd->prepare('DELETE FROM infos WHERE id = :id');
            $req->execute(array('id' => $id));
        }
    }

?>