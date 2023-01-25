<!-- On peut utiliser un template de "mise en page", appelé layout, pour factoriser le code HTML redondant. -->


<!DOCTYPE html>
    <html>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="css/style.css">
                <title><?= $title ?></title>
                <link rel="shortcut icon" type="img/ico" href="img/favicon.ico">
                <script src="https://kit.fontawesome.com/3793efe237.js" crossorigin="anonymous"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
            </head>
        <body>
            <header>
            <nav>
                <div class="container">
                    <ul class="menu">
                        <li>
                            <a href='?controllers=posts&action=index' title="Accueil">Accueil</a>
                        </li>
                        <li>
                        <a href='?controllers=posts&action=index'>Articles</a>
                        </li>
                        <li>
                            <a href='controllers/connexion_controller.php' title="Connexion">Connexion</a>
                        </li>
                        <li>
                            <a href="inscription.php" title="Inscription">Inscription</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </header> 
            <?= $content ?>
        </body>
    </html>