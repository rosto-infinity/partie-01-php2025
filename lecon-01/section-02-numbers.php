<?php
// Leçon : Opérations numériques en PHP 8.x
// Cette leçon présente les opérations arithmétiques, les opérateurs d'assignation, d'incrémentation/décrémentation 
// ainsi que les fonctions mathématiques, en mettant en avant les nouveautés de PHP 8.x.

// 1. Déclaration de nombres
$a = 5;
$b = 4;
$c = 1.2;

// 2. Opérations arithmétiques
echo "Addition : " . ($a + $b) . '<br>';
echo "Soustraction : " . ($a - $b) . '<br>';
echo "Multiplication : " . ($a * $b) . '<br>'; // Exemple : ($c * $a + 6) est possible
echo "Division : " . ($a / $b) . '<br>';
echo "Modulo : " . ($a % $b) . '<br>';

// Nouveauté PHP 8.x : fdiv() permet de diviser en gérant correctement les cas de division par zéro
echo "Division flottante avec fdiv : " . fdiv($a, $c) . '<br>';

// 3. Opérateurs d'assignation arithmétique
$a += $b; // équivaut à $a = $a + $b;
echo "Après addition, \$a = $a<br>";
$a -= $b; // équivaut à $a = $a - $b;
echo "Après soustraction, \$a = $a<br>";
$a *= $b; // équivaut à $a = $a * $b;
echo "Après multiplication, \$a = $a<br>";
$a /= $b; // équivaut à $a = $a / $b;
echo "Après division, \$a = $a<br>";
$a %= $b; // équivaut à $a = $a % $b;
echo "Après modulo, \$a = $a<br>";

// Réinitialisation de $a pour démontrer les opérateurs d'incrémentation/décrémentation
$a = 5;

// 4. Opérateurs d'incrémentation
echo "Post-incrément (\$a++): " . $a++ . '<br>'; // Affiche 5, puis $a devient 6
echo "Pré-incrément (++\$a): " . ++$a . '<br>';  // Incrémente à 7 puis affiche 7

// 5. Opérateurs de décrémentation
echo "Post-décrément (\$a--): " . $a-- . '<br>'; // Affiche 7, puis $a devient 6
echo "Pré-décrément (--\$a): " . --$a . '<br>';  // Décrémente à 5 puis affiche 5

// 6. Fonctions de vérification de type numérique
echo "is_float(1.25) : " . (is_float(1.25) ? 'true' : 'false') . '<br>';
echo "is_int(3.4) : " . (is_int(3.4) ? 'true' : 'false') . '<br>';
echo "is_numeric(\"3.45\") : " . (is_numeric("3.45") ? 'true' : 'false') . '<br>';
// Remarque : "3g.45" n'est pas une valeur numérique valide, is_numeric renverra false
echo "is_numeric(\"3g.45\") : " . (is_numeric("3g.45") ? 'true' : 'false') . '<br>';

// 7. Conversion de chaîne en nombre
$strNumber = '12.34';
$number = (float)$strNumber; // Ou utiliser floatval($strNumber)
var_dump($number);
echo '<br>';

// 8. Fonctions mathématiques
echo "abs(-15) : " . abs(-15) . '<br>';
echo "pow(2, 3) : " . pow(2, 3) . '<br>';
echo "sqrt(16) : " . sqrt(16) . '<br>';
echo "max(2, 3) : " . max(2, 3) . '<br>';
echo "min(2, 3) : " . min(2, 3) . '<br>';
echo "round(2.4) : " . round(2.4) . '<br>';
echo "round(2.6) : " . round(2.6) . '<br>';
echo "floor(2.6) : " . floor(2.6) . '<br>';
echo "ceil(2.4) : " . ceil(2.4) . '<br>';

// 9. Formatage des nombres
$nombre = 123456789.12345;

// Utilisation des arguments nommés (une nouveauté de PHP 8.x) pour une meilleure lisibilité
$nombre = 1234.56;
echo number_format(
    num: $nombre,
    decimals: 2,
    decimal_separator: '.',
    thousands_separator: ','
) . '<br>';
?>


// Pour plus d'informations, consultez la documentation PHP sur les fonctions mathématiques :
// https://www.php.net/manual/en/ref.math.php
?>