<?php
declare(strict_types=1);

// Fonction deux nombre relle
function additionerdeuxnombres(float $a, float $b): float {
    return $a + $b;
}

// Fonction soustraire deux nombre
function soustrairedeuxnombres(float $a, float $b): float {
    return $a - $b;
}

// Fonction multiplier deux nombre
function multiplierdeuxnombres(float $a, float $b): float {
    return $a * $b;
}

// Fonction diviser deux nombre
function diviserdeuxnombres(float $a, float $b): float {
    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }
    return $a / $b;
}

// Fonction est pair
function estpair(int $n): bool {
    return $n % 2 == 0;
}

// Fonction est positif
function estpositif(float $n): bool {
    return $n >= 0;
}

// Fonction maximum de trois nombres
function maximum(float $a, float $b, float $c): float {
    if ($a >= $b && $a >= $c) {
        return $a;
    }
    if ($b >= $a && $b >= $c) {
        return $b;
    }
    return $c;
}

// Fonction est premier
function estpremier(int $n): bool {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Fonction calculer TTC
function calculerttc(float $ht, float $tva = 20.0): float {
    return $ht * (1 + $tva / 100);
}

// Fonction calculer remise
function calculerremise(float $prix, float $pourcentage): float {
    return round($prix * (1 - $pourcentage / 100), 2);
}

// Fonction calculer facture
function calculerfacture(float $prixUnitaire, int $quantite, float $remise = 0, float $tva = 20.0): float {
    $total = $prixUnitaire * $quantite;
    $apresRemise = calculerremise($total, $remise);
    return calculerttc($apresRemise, $tva);
}

// Fonction moyenne
function moyenne(float ...$notes): float {
    if (count($notes) == 0) {
        return 0;
    }
    return array_sum($notes) / count($notes);
}

// Fonction aire cercle
function airecercle(float $rayon): float {
    return round(M_PI * $rayon * $rayon, 2);
}

// Fonction perimetre cercle
function perimetrecercle(float $rayon): float {
    return round(2 * M_PI * $rayon, 2);
}

// Fonction celsius vers fahrenheit
function celsiusversfahrenheit(float $c): float {
    return $c * 9 / 5 + 32;
}

// Fonction fahrenheit vers celsius
function fahrenheitverscelsius(float $f): float {
    return ($f - 32) * 5 / 9;
}

// Fonction convertir devise
function convertirdevise(float $montant, float $taux): float {
    return $montant * $taux;
}

// Fonction factorielle
function factorielle(int $n): int {
    if ($n < 0) {
        throw new InvalidArgumentException("Factorielle impossible pour n < 0");
    }
    $resultat = 1;
    for ($i = 2; $i <= $n; $i++) {
        $resultat *= $i;
    }
    return $resultat;
}

// Fonction fibonacci
function fibonacci(int $n): array {
    if ($n <= 0) {
        return [];
    }
    if ($n == 1) {
        return [0];
    }
    $tab = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $tab[] = $tab[$i - 1] + $tab[$i - 2];
    }
    return $tab;
}

// Fonction pgcd
function pgcd(int $a, int $b): int {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Fonction puissance
function puissance(float $x, int $n): float {
    $resultat = 1;
    for ($i = 0; $i < $n; $i++) {
        $resultat *= $x;
    }
    return $resultat;
}