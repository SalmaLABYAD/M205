<?php
require_once __DIR__ . "/function.php";

// Test additionner deux nombres
echo "12 + 8 = " . additionerdeuxnombres(12, 8) . "<br>";

// Test soustraire deux nombres
echo "12 - 8 = " . soustrairedeuxnombres(12, 8) . "<br>";

// Test multiplier deux nombres
echo "12 * 8 = " . multiplierdeuxnombres(12, 8) . "<br>";

// Test diviser deux nombres
echo "12 / 8 = " . diviserdeuxnombres(12, 8) . "<br>";

// Test diviser par zero
try {
    echo diviserdeuxnombres(10, 0) . "<br>";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage() . "<br>";
}

// Test est pair
echo "estpair(4) : " . (estpair(4) ? "oui" : "non") . "<br>";

// Test est positif
echo "estpositif(-5) : " . (estpositif(-5) ? "oui" : "non") . "<br>";

// Test maximum
echo "maximum(2, 9, 5) : " . maximum(2, 9, 5) . "<br>";

// Test est premier
echo "estpremier(7) : " . (estpremier(7) ? "oui" : "non") . "<br>";

// Test calculer TTC
echo "calculerttc(100) : " . calculerttc(100) . "<br>";

// Test calculer remise
echo "calculerremise(100, 10) : " . calculerremise(100, 10) . "<br>";

// Test calculer facture
$montant = calculerfacture(100, 10, 10, 20);
echo "calculerfacture : " . number_format($montant, 2, ",", " ") . " MAD<br>";

// Test moyenne
echo "moyenne(10, 15, 20) : " . moyenne(10, 15, 20) . "<br>";

// Test aire cercle
echo "airecercle(5) : " . airecercle(5) . "<br>";

// Test perimetre cercle
echo "perimetrecercle(5) : " . perimetrecercle(5) . "<br>";

// Test celsius vers fahrenheit
echo "celsiusversfahrenheit(20) : " . celsiusversfahrenheit(20) . "<br>";

// Test fahrenheit vers celsius
echo "fahrenheitverscelsius(68) : " . fahrenheitverscelsius(68) . "<br>";

// Test convertir devise
echo "convertirdevise(1000, 0.092) : " . convertirdevise(1000, 0.092) . "<br>";

// Test factorielle
echo "factorielle(5) : " . factorielle(5) . "<br>";

// Test fibonacci
echo "fibonacci(6) : ";
print_r(fibonacci(6));
echo "<br>";

// Test pgcd
echo "pgcd(12, 18) : " . pgcd(12, 18) . "<br>";

// Test puissance
echo "puissance(2, 3) : " . puissance(2, 3) . "<br>";