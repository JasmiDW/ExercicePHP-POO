<h1>Vos bonnes pratiques</h1>
<p><a href="?controller=posts&action=index">Retour à la liste des articles</a></p>
<?php

    echo "<h2>$post->title</h2>";
    echo "$post->date<br><br>";
    echo "$post->content";

?>    
    <p><a href='?controller=posts&action=delete&id=<?php echo $post->id; ?>'>Supprimer l'article</a></p>
    <p><a href='?controller=posts&action=update&id=<?php echo $post->id; ?>'>Modifier l'article</a></p>
