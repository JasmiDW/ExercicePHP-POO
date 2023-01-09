<!-- Créer une classe avion ainsi que 2 méthodes (décoller et atterrir). Chaque méthode écrit ce qu’elle est sensée faire. Appeler ces méthodes pour 2 avions -->

<?php 
    class Avion{
        //methodes
        function decoller(){
            echo "L'avion blanc décolle.";
        }

        function atterrir(){
            echo "L'avion rouge atterit.";
        }

    }
    $UnAvion = new Avion();//on instancie la classe
    $UnAvion2 = new Avion();//on instancie la classe
    $UnAvion->decoller(); // on appelle la méthode rouler
    $UnAvion2->atterrir();

?>