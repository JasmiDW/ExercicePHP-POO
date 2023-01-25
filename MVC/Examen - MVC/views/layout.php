<!DOCTYPE html>
    <html>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="css/style.css">
                <title>Eco-pratique</title>
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
                            <a href='?controller=posts&action=index' title="Accueil">Accueil</a>
                        </li>
                        <li>
                        <a href='?controller=posts&action=index'>Articles</a>
                        </li>
                        <li>
                            <a href='?controller=pages&action=connexion' title="Connexion">Connexion</a>
                        </li>
                        <li>
                            <a href="?controller=pages&action=inscription" title="Inscription">Inscription</a>
                        </li>
                    </ul>
                </div>
            </nav>
            </header> 
            <?php require_once('routes.php'); ?>
        </body>
    </html>