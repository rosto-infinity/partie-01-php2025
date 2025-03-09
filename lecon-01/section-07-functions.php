<?php
// ===================================================
// 3. Fonctions
// ===================================================

// Fonction simple de salutation
function greet() {
  echo "Hello, I am Owen and Eva!<br>";
}
greet();
greet();

// Fonction qui retourne la somme de deux nombres
function sum($a, $b) {
  return $a + $b;
}
echo "Sum of 10 and 15 is: " . sum(10, 15) . "<br>";

// Fonction variadique utilisant une arrow function pour sommer tous les nombres
function sumAll(...$nums) {
  return array_reduce($nums, fn($carry, $n) => $carry + $n, 0);
}
echo "Sum of numbers 1,2,3,4,5: " . sumAll(1, 2, 3, 4, 5) . "<br>";

// ===================================================
// 4. Fonctions de date et heure
// ===================================================

// Afficher le timestamp actuel
echo "Current timestamp: " . time() . "<br>";

// Afficher la date et l'heure actuelles dans un format personnalisé
echo "Current date: " . date('Y-m-d H:i:s') . "<br>";

// Afficher la date et l'heure d'hier
echo "Yesterday: " . date('Y-m-d H:i:s', time() - 86400) . "<br>";

// Afficher la date avec un format différent
echo "Formatted date: " . date('F j, Y, g:i a') . "<br>";

// Conversion d'une chaîne de date en timestamp
echo "Timestamp for '+1 day': " . strtotime('+1 day') . "<br>";
echo "Timestamp for '+1 week': " . strtotime('+1 week') . "<br>";

// Parsing d'une chaîne de date
$dateString = '2024-04-01 15:30:00';
$parsedDate = date_parse($dateString);
echo "<pre>";
var_dump($parsedDate);
echo "</pre>";

// Parsing d'une date à partir d'un format spécifique
$dateStringFormatted = 'April 1 2024 15:30:00';
$parsedDateFormatted = date_parse_from_format('F j Y H:i:s', $dateStringFormatted);
echo "<pre>";
var_dump($parsedDateFormatted);
echo "</pre>";
?>