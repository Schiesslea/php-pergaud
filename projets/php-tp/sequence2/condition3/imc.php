<?php
$poids = readline("Saisir votre poids (en kg) : ");
$taille = readline("Saisir votre taille (en m) : ");
if ($taille<0 || $poids<0 ) {
    exit("ERREUR : une valeur saisie est négatif !");
} else {
        $imc = round($poids/$taille**2, 1);
        echo "$imc";
        echo PHP_EOL;
}

if ($imc<18.5) {
    echo "Vous êtes en sous-poids";
} elseif ($imc>=18.5 && $imc<25) {
    echo "Vous avez un poids normal";
} elseif ($imc>=25 && $imc<30) {
    echo "Vous êtes en surpoids";
} elseif ($imc>=30 && $imc<40) {
    echo "Vous êtes en obésité modérée";
} else {
    echo "Vous êtes en obésité sévère";
}