<?php
// Leçon 2 : Variables et types de données en PHP 8

// 1. Déclarer des variables
$nom1 = "Owen";       // Chaîne de caractères
$nom2 = "Eva";        // Chaîne de caractères
$age = 30;            // Entier
$isMale = true;       // Booléen
$taille = 1.80;       // Nombre à virgule (float)
$revenu = null;       // Valeur nulle

// 2. Afficher les variables
// La concaténation en PHP se fait avec l'opérateur . (point)
echo $nom1 . '<br>';   // Affiche "Owen"
echo $nom2 . '<br>';   // Affiche "Eva"
echo $age . '<br>';    // Affiche 30
echo $isMale . '<br>'; // true s'affiche comme "1"
echo $taille . '<br>'; // Affiche 1.8
echo $revenu . '<br>'; // N'affiche rien car c'est null

// 3. Afficher le type des variables
echo gettype($nom1) . '<br>';  // string
echo gettype($age) . '<br>';     // integer
echo gettype($isMale) . '<br>';  // boolean
echo gettype($taille) . '<br>';  // double (float)
echo gettype($revenu) . '<br>';  // NULL

// 4. Afficher les variables en détail avec var_dump
var_dump($nom1, $nom2, $age, $isMale, $taille, $revenu);
echo '<br>';

// 5. Changer la valeur d'une variable
$nom1 = false; // Modification de type

// 6. Vérifier le type après modification
echo gettype($nom1) . '<br>'; // Affiche "boolean"

// 7. Fonctions de vérification de type
echo is_string($nom2) ? 'nom2 est une chaîne<br>' : 'nom2 n\'est pas une chaîne<br>';
echo is_int($age) ? 'age est un entier<br>' : 'age n\'est pas un entier<br>';
echo is_bool($isMale) ? 'isMale est un booléen<br>' : 'isMale n\'est pas un booléen<br>';
echo is_float($taille) ? 'taille est un float<br>' : 'taille n\'est pas un float<br>';

// 8. Vérifier si une variable est définie
var_dump(isset($nom1)); // true, car $nom1 est défini même s'il a changé de type
var_dump(isset($nom3)); // false, $nom3 n'est pas défini
echo '<br>';

// 9. Définir des constantes
define('PI', 3.14);
echo PI . '<br>';           // Affiche 3.14
var_dump(defined('PI'));     // Affiche true
echo '<br>';

// 10. Utiliser des constantes prédéfinies de PHP
echo SORT_ASC . '<br>';     // Constante pour le tri croissant
echo PHP_INT_MAX . '<br>';  // Valeur maximale d'un entier

// Bonus : Interpolation de chaînes (PHP 8 supporte cette syntaxe de manière optimale)
echo "Nom 2 : $nom2, Âge : $age<br>";