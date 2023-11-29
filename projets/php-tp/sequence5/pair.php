<?php

// Inclure le fichier dans lequel se trouve la fonction estPair()
include 'cours-fonctions.php';

// Appel à la fonction
$nombre = readline("Saisir un nombre entier : ");
if (estPair($nombre)) { // Quand booléen, pas obliger de mettre true, c'est implicite
    echo "Le nombre $nombre est pair !";
} else {
    echo "Le nombre $nombre est impair";
}

