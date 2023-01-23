<?php 

  // Reprendre la partie sur la “résolution statique à la volée” et l’adapter pour indiquer facilement dans quelle classe nous sommes.

  class Perso {
    public static function infosPerso(){
      return self::quiSuisje();
      
    }

    public static function quiSuisje()
    {
          return "je suis perso. Appartient à la classe ". __CLASS__ . "<br/>";

    }
  }

  class Magicien extends Perso {
    public static function quiSuisje()
    {
        return "je suis magicien";
        
    }
  }
  echo Magicien::infosPerso(); // ->je suis perso


?>