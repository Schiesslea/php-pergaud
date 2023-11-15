<?php

$nombre1 = readline('Saisir un nombre (nombre1) :');
$nombre2 = readline('Saisir un nombre (nombre2) :');
$nombre3 = readline('Saisir un nombre (nombre3) :');
$nombreMax=max($nombre1, $nombre2, $nombre3);
echo "Le plus grand nombre est $nombreMax";
