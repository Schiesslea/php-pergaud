<?php

$largeur = readline("Saisir la largeur du rectangle : ");
$hauteur = readline("Saisir la hauteur du rectangle :");

for ($i=0; $i<$hauteur; $i++) {
    echo PHP_EOL;
    echo "*" ." ";
    for ($n=0; $n<$largeur-1; $n++) {
        echo "*" ." ";
    }
}