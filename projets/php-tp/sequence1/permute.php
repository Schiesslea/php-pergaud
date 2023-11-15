<?php

$nombre1 = readline('Saisir un nombre (nombre1) :');
$nombre2 = readline('Saisir un nombre (nombre2) :');
$nombreTemporaire = $nombre1;
$nombre1=$nombre2;
$nombre2=$nombreTemporaire;
echo "nombre1 est égal à $nombre1 et nombre2 est égal à $nombre2 ";