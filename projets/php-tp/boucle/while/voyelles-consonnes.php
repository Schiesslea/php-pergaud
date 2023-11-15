<?php

$phraseUtilisateur = readline("Saisir une phrase : ");

$voyelles = array("a", "e", "i", "o", "u", "y");
$compteurVoyelles = 0;
if (in_array($voyelles, $phraseUtilisateur)) {
    echo count($voyelles);
}