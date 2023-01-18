<!-- En PHP, une classe abstraite est une classe qui ne peut pas être instanciée, c'est-à-dire que vous ne pouvez pas créer un objet d'une classe abstraite, elle ne peut être héritée que par d'autres classes. Une classe abstraite sert de modèle pour d'autres classes, en fournissant une interface commune pour les méthodes et les propriétés que les sous-classes doivent implémenter. 


Prenons l'exemple suivant : vous avez une classe Humain, à partir de laquelle dérivent la classe Homme et la classe Femme. En toute logique, Homme et Femme sont instanciables (les objets créés ont une existence en soi), mais la classe Humain sera déclarée abstraite car un objet Humain n'existe pas en tant que tel, puisqu'il manque l'information sur le sexe. Ici, la classe Humain servira à implémenter des méthodes qui seront utilisées à la fois pour Homme et pour Femme. -->

<?php 

    abstract class Humain
    {
        abstract protected function sexe();
    }


    class Homme extends Humain {
        function sexe(){
            echo "Je suis un homme<br>";
        }
    }

    class Femme extends Humain {
        function sexe(){
            echo "Je suis une femme";
        }
    }

    $Homme = new Homme();
    $Homme->sexe();
    $Femme= new Femme();
    $Femme->sexe();

?>