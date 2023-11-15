<?php
$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$normal = "\033[0m";

$distanceKM = readline("Saisir la distance du trajet (en km) :");
$dureeDemande = readline("Saisir la durée du trajet (h:mn) :");
$Heure = substr($dureeDemande, 0,1);
$Minute = substr($dureeDemande, 2, 2);
if ($Minute > 59) {
    echo PHP_EOL;
    echo $texteRouge."ERREUR : la durée $dureeDemande n'est pas valide".$normal;
} else {
$duree = intval($Minute)/60 + intval($Heure);
$vitesse = ceil($distanceKM/$duree);
echo "La vitesse moyenne du trajet est $vitesse";
echo PHP_EOL;
if ($vitesse>90) {
echo $fondRouge."Vous êtes au dessus de 90km/h".$normal;
} else {
    echo $fondVert."Vous êtes en dessous de 90km/h".$normal;
}
}