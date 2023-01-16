<!-- Hydrater ? Un terme précis pour dire que l'on'va remplir les attributs de l'objet avec les valeurs entrées par le visiteur par ex.
Assigne des valeurs à tes attributs de la classe, automatiquement, c'est à dire sans devoir appeler les setters toi-même. -->

<?php
    require_once 'Fantomes.php';

    $infos=['nom' => 'Dolly',"couleur" => 'rose'];
    $dolly=new Fantomes($infos);
    $dolly
        ->boire(11)
        ->setVelocite(2)
        ->message();

    $infos=['nom' => 'Clyde',"couleur" => 'jaune'];
    $clyde=(new Fantomes($infos))
        ->perdre(5)
        ->perdre(10)
        ->message();

    
?>