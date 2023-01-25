<?php 

    $title = "Eco Pratique - Se connecter";
?>

<?php 

    ob_start();
?>

<form action="index.php?action=connexion_traitement_controller&id<?php echo $post['id']; ?> "" method="post">
    <h1>Se connecter</h1>
    <input  name="id_user" type ="hidden"/>
    <input type="text" name="login" placeholder="Login"/>
    <input type="text" name="mdp"  placeholder="Mot de passe"/>
    <input type="submit" value="Valider"/>
</form>
    <?php $content = ob_get_clean(); ?>

    <?php require_once('layout.php'); ?>