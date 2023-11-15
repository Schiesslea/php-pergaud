<?php
$prenom = "jean";
// Afficher $prenom en majuscule
echo strtoupper($prenom);
echo PHP_EOL;
echo $prenom;
$prenomMaj = strtoupper($prenom);
echo PHP_EOL;
echo strlen($prenom);
echo PHP_EOL;
echo strtoupper($prenom)." a une longueur de ".strlen($prenom)." caractères";
echo PHP_EOL;
echo strtoupper(substr($prenom, 0, 1));