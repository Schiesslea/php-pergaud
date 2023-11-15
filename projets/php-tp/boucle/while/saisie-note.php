<?php

$noteUtilisateur = readline("Saisir une note : ");
while ($noteUtilisateur > 20 || $noteUtilisateur<0) {
    echo "La note saisie doit être comprise entre 0 et 20 !";
    echo PHP_EOL;
    $noteUtilisateur = readline("Saisir une note : ");
}
echo "La note saisie est correcte !";