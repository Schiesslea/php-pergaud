<?php

$temperature = readline("Saisir une température : ");
$echelleTemp = readline("Indiquer l'échelle de température choisie (C ou F) : ");

if (is_numeric($temperature)!="True" || ($echelleTemp!="C" || $echelleTemp!="F")){
    echo "ERREUR : une valeur saisie est fausse";
}