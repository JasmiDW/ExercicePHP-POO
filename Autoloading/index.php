<!-- L'autoloading en PDO (PHP Data Objects) est un mécanisme permettant de charger automatiquement les classes requises pour un script en cours d'exécution. Il permet de ne plus utiliser des require ou include pour charger les classes, ce qui peut rendre le code plus lisible et maintenable.

Il existe plusieurs manières d'implémenter l'autoloading en PHP, mais la plus couramment utilisée est l'utilisation de la fonction spl_autoload_register(). Cette fonction permet de définir une ou plusieurs fonctions qui seront appelées automatiquement lorsqu'une classe non déclarée est utilisée. Il suffit de définir une fonction qui prend en paramètre le nom de la classe et qui charge le fichier contenant cette classe. Cette fonction peut être ajoutée dans le fichier d'initialisation de l'application. -->

<?php

    require_once 'Bdd.php';

    // La fonction spl_autoload_register() prend en paramètre le nom d'une fonction, pas le nom d'une classe.
    spl_autoload_register('autoloadClasses');

    // Fonction d'autoload qui charge les classes à partir d'un répertoire spécifique
    function autoloadClasses($class) {
        require $class.'.php';
    }

    spl_autoload_register('autoloadManager');

    function autoloadManager($classManager) {
        require $classManager.'.php';
    }
    
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