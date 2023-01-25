<!DOCTYPE html>
    <html>
        <head>
                <meta charset="utf-8">
                <link rel="stylesheet" href="css/style.css">
                <title>Eco Pratique</title>
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
                                <a href='/Examen' title="Accueil">Accueil</a>
                            </li>
                            <li>
                            <a href='index.php'>Articles</a>
                            </li>
                            <li>
                                <a href="index.php?action=connexion_controller" title="Connexion">Connexion</a>
                            </li>
                            <li>
                                <a href="inscription.php" title="Inscription">Inscription</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header> 
              <h1>Vos bonnes pratiques</h1>
              <p><a href="index.php">Retour à la liste des articles</a></p>
                <?php

                    foreach ($req as $info) {
                        $title = $info["titre"]; 
                        $content = $info["description_article"];
                        $date = $info["date_article"];
            
                    }
                    echo "$title<br>";
                    echo "$content<br>";
                    echo "$date<br>";
                ?>
        </body>
    </html>

    