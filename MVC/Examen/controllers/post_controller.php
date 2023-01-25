<?php

    require_once('src/model.php');

    function post($id){
        $req = getOnePost($id);

    require('views/posts.php');
}
?>
    