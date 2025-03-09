<?php
// Leçon : Chaînes de caractères et fonctions associées en PHP 8.x

// 1. Création d'une chaîne simple avec extraction de variable
$author = "Owen";
$string = "Hello $author";         // Utilisation de l'interpolation (double quotes)
$string2 = 'Hello ' . $author;       // Utilisation de la concaténation (simple quotes)

echo $string . '<br>';
echo $string2 . '<br>';

// 2. Concaténation de chaînes
echo "Hello " . "World" . '<br>';
// Vous pouvez concaténer plusieurs chaînes en utilisant l'opérateur "."

// 3. Fonctions sur les chaînes
$string = "    Hello World      ";

// Affichage de la longueur de la chaîne (espaces inclus)
echo "1 - Longueur : " . strlen($string) . '<br>';

// Suppression des espaces en début et fin de chaîne
echo "2 - Sans espaces : '" . trim($string) . "'<br>";

// Suppression des espaces à gauche
echo "3 - Sans espaces à gauche : '" . ltrim($string) . "'<br>";

// Suppression des espaces à droite
echo "4 - Sans espaces à droite : '" . rtrim($string) . "'<br>";

// Comptage des mots
echo "5 - Nombre de mots : " . str_word_count($string) . '<br>';

// Renversement de la chaîne
echo "6 - Inversée : " . strrev($string) . '<br>';

// Conversion en majuscules et minuscules
echo "7 - En majuscules : " . strtoupper($string) . '<br>';
echo "8 - En minuscules : " . strtolower($string) . '<br>';

// Mise en majuscule du premier caractère
echo "9 - ucfirst('hello') : " . ucfirst('hello') . '<br>';

// Mise en minuscule du premier caractère
echo "10 - lcfirst('HELLO') : " . lcfirst('HELLO') . '<br>';

// Mise en majuscule de la première lettre de chaque mot
echo "11 - ucwords('hello world') : " . ucwords('hello world') . '<br>';

// Recherche de la position d'une sous-chaîne (sensible à la casse)
echo "12 - strpos (sensible à la casse) : " . strpos($string, 'World') . '<br>';

// Recherche de la position d'une sous-chaîne (insensible à la casse)
echo "13 - stripos (insensible à la casse) : " . stripos($string, 'world') . '<br>';

// Extraction d'une partie de la chaîne à partir d'un index
echo "14 - Substr à partir de l'index 8 : " . substr($string, 8) . '<br>';

// Remplacement d'une sous-chaîne (sensible à la casse)
echo "15 - Remplacement (World => PHP) : " . str_replace('World', 'PHP', $string) . '<br>';

// Remplacement d'une sous-chaîne (insensible à la casse)
echo "16 - Remplacement insensible (world => PHP) : " . str_ireplace('world', 'PHP', $string) . '<br>';

// 4. Fonctions avancées sur les chaînes
$invoiceNumber = 140;
$invoiceNumber2 = 453456;

// Compléter un numéro de facture sur 8 chiffres en le remplissant de zéros à gauche
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>';

// Répéter une chaîne plusieurs fois
echo str_repeat('Hello', 2) . '<br>';

// 5. Texte multi-lignes et gestion des sauts de ligne
$longText = "
  Hello, my name is eva
  I am 27,
  I love my daughter
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// 6. Texte multi-lignes avec balises HTML
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - Texte original : " . $longText . '<br>';
echo "2 - Avec nl2br : " . nl2br($longText) . '<br>';
echo "3 - Avec htmlentities : " . htmlentities($longText) . '<br>';
echo "4 - nl2br + htmlentities : " . nl2br(htmlentities($longText)) . '<br>';
echo "5 - Décodage d'entités HTML : " . html_entity_decode(htmlentities($longText)) . '<br>';
echo "6 - Avec htmlspecialchars : " . htmlspecialchars($longText) . '<br>';

// Pour plus d'informations, consultez la documentation PHP sur les chaînes :
// https://www.php.net/manual/en/ref.strings.php
?>