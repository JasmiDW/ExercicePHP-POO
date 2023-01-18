<!-- créer une page index.php, affichant un tableau HTML contenant les fantômes contenu dans la BD
créer une page fantome.php pouvoir créér un fantôme
pouvoir modifier un fantôme
pouvoir supprimer un fantôme
Le tout avec une classe fantome, un manager, de l’hydratation, ... -->


<?php

require_once 'CompteurFantomes.php';
require_once 'Fantomes.php';
require_once 'Manager.php';
require_once 'Bdd.php';

    $requete=$bdd->prepare("SELECT id, nom, couleur, pv, velocite 
                            FROM infos");

    $requete->execute();
    $result = $requete->fetchAll();
    ?>

    <h1>Les fantomes</h1>
    <form action="Ajout.php" method="post">
    <input type="submit" value="Ajouter un fantome">
    </form>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nom</th>
            <th>Couleur</th>
            <th>PV</th>
            <th>Vélocité</th>
        </thead>
        <tbody>
        <?php
                foreach($result as $info){
            ?>
            <tr>
                <td><?= $info['id'] ?></td>
                <td><?= $info['nom'] ?></td>
                <td><?= $info['couleur'] ?></td>
                <td><?= $info['pv'] ?></td>
                <td><?= $info['velocite'] ?></td>
                <td><a href="update.php?id=<?php echo $info['id']?>">Modifier</a></td>
                <td><a href="delete.php?id=<?php echo $info['id']?>">Supprimer</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php

        // echo CompteurFantomes::$CompteurFantomes;// affiche le contenu de la propriété compteurFantomes
        // echo "<br>";
        $Manager = new CompteurFantomes;
        $test2 = new CompteurFantomes;
        $test3 = new CompteurFantomes;
    //   echo CompteurFantomes::getCompteurFantomes();// affiche la valeur renvoyée par la méthode getCompteurFantomes()
        echo CompteurFantomes::message();

    ?>
    <!-- <h1>Les fantomes</h1>

    <?php
    // foreach ($result as $info) {
    //     $nom= $info["nom"]; 
    //     $couleur = $info["couleur"];
    //     $pv = $info["pv"];
    //     $velocite = $info["velocite"];

    ?>
    
    <?php
    // echo "$nom, le fantome $couleur a $pv point de vie et $velocite en vélocité. <br>";
    // } --> -->