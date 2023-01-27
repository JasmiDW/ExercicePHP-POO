<form action="?controller=posts&action=update_traitement&id=<?php echo $post->id?>" method="POST">
Titre :<br> <input type="text" name="titre" value ="<?php echo $post->title?>"><br><br>
Description :<br><input name="description" value="<?php echo $post->content?>"><br><br>
Date :<br> <input type="date" name="date" value ="<?php echo $post->date?>"><br><br>
<input type="submit" value="Modifier">
<input type="hidden" name="id" value="<?php echo $post['id']?>">
</form>