<?php

require_once 'Fantomes.php';
require_once 'Manager.php';
require_once 'Bdd.php';

$id=$_GET['id'];

// Ensuite, on instancie un objet $manager qui est de la classe Manager et on passe en paramètre l'objet bdd qui permet de se connecter à la base de données.
$manager = new Manager($bdd);

// Récupére les informations de l'enregistrement correspondant à l'ID spécifié ($id). Ces informations sont stockées dans la variable $info.
$info = $manager->getID($id);

?>

<form action="Update_traitement.php" method="post">
    <label>Nom</label><input type="text" name="nom" value= "<?php echo $info['nom']?>">
    <label>Couleur</label><input type="text" name="couleur" value= "<?php  echo $info['couleur'] ?>">
    <label>PV</label><input type="text" name="pv" value= "<?php  echo $info['pv'] ?>">
    <label>Velocité</label><input type="text" name="velocite" value= "<?php  echo $info['velocite'] ?>">
    <input type="submit">
</form>