<?php
$nombrePairs = 0;
$nombre = 0;
$nombreUtilisateur = readline("Saisir un nombre : ");
while ($nombre <=$nombreUtilisateur) {
    if ($nombre%2==0) {
        $nombrePairs += $nombre;
        echo "$nombre ";
    }
    $nombre++;
}
echo PHP_EOL;
echo "$nombrePairs ";