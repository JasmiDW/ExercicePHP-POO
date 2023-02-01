<?php 
// déclaration du namespace 
    namespace Math;

// déclaration d'une fonction 
    function add($a, $b){
        return $a + $b;
    }

//déclaration d'une class constante
    const PI = 3.14;

// décalaration d'une class
    class Geometry {
        static function getCircleArea ($radius){
            return PI * $radius ** 2;
        }
    }
