<h1>Vos bonnes pratiques</h1>
    <table>
        <thead>
            <th>Nom de la pratique</th>
            <th>Description</th>
            <th>Date</th>
        </thead>
        <tbody>

        <?php foreach($posts as $post) { ?>
        <tr>
            <td> <?php echo $post->title; ?></td>
            <td> <?php echo $post->content; ?></td>
            <td> <?php echo $post->date; ?></td>
            <td><a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'><input type="button" value="Lire"></a> </td>
        </tr>                      
        <?php
        }
        ?>
        </tbody>
    </table>

