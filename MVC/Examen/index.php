
<!-- On charge nos fichiers de contrôleurs controllers/homepage.php et controllers/post_controller.php(pour que les fonctions soient en mémoire, quand même !).

On teste le paramètre action pour savoir quel contrôleur appeler. Si le paramètre n'est pas présent, on charge le contrôleur de la page d'accueil contenant la liste des derniers billets (ligne 21).

On teste les différentes valeurs possibles pour notre paramètre action et on redirige vers le bon contrôleur à chaque fois. -->

<?php

require_once('controllers/homepage_controller.php');
require_once('controllers/post_controller.php');


if (isset($_GET['action']) && $_GET['action'] !== '') {
	if ($_GET['action'] === 'post_controller') {
    	if (isset($_GET['id']) && $_GET['id'] > 0) {
			$id = $_GET['id'];
        	post($id);

    	} else {
        	echo 'Erreur : aucun identifiant de billet envoyé';

        	die;
    	}
	} else {
    	echo "Erreur 404 : la page que vous recherchez n'existe pas.";
	}
} else {
	homepage();
}