<?php
$tempsAppel = readline("Saisir votre temps d'appel (en minutes) : ");
$nbSms = readline("Saisir le nombre de SMS envoyés : ");
$donnee = readline("Saisir la quantité de donnée utilisée (en Go) : ");

if ($tempsAppel<0 || $nbSms<0 || $donnee<0 ) {
    echo "ERREUR : une valeur saisie est négatif !";
} else {
    $coutAppel = 0.05 * $tempsAppel;
    $coutSms = 0.10 * $nbSms;
    $coutDonnee = 0.50 * $donnee;
    $coutTotal = $coutAppel + $coutSms + $coutDonnee;
    echo "Le prix total de la facture est de $coutTotal";
}