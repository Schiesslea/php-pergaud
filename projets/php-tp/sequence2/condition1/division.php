<?php
$nombre1  = readline("Saisir un nombre entier:");
$nombre2  = readline("Saisir un nombre entier:");
if ($nombre2 == 0) {
    echo "La divison par 0 n'est pas possible";
} else {
    $resultat = round($nombre1/$nombre2, 2);
    echo "Le résulatat de la divison de $nombre1 par $nombre2 est $resultat";
}