<!-- affiche la page -->
<?php 

    $title = "Eco Pratique";
?>


<!-- Comme ce contenu est un peu gros, on utilise une astuce pour le mettre dans une variable. On appelle la fonctionob_start()(ligne 3) qui "mémorise" toute la sortie HTML qui suit. Puis, à la fin, on récupère le contenu généré avecob_get_clean()(ligne 28) et on met le tout dans$content. -->

<?php 

    ob_start();
?>

<h1>Vos bonnes pratiques</h1>
    <table>
        <thead>
            <th>Nom de la pratique</th>
            <th>Description</th>
            <th>Date</th>
        </thead>
        <tbody>
        <?php
            foreach($posts as $post){
        ?>
        <tr>
            <td> <?php echo $post['title']; ?></td>
            <td> <?php echo $post['content']; ?></td>
            <td> <?php echo $post['date']; ?></td>
            <td><a href="index.php?action=post_controller&id=<?php echo $post['id']; ?> "><input type="button" value="Lire"></a> </td>
        </tr>                      
        <?php
        }
        ?>
        </tbody>
    </table>

    <?php $content = ob_get_clean(); ?>

    <?php require_once('layout.php'); ?>