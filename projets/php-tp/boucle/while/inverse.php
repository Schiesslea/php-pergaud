<?php
//echo strrev($phraseUtilisateur); permet de faire l'inverse d'une variable
$phraseUtilisateur = readline("Saisir une phrase : ");
$positionLettre = -1;
$phraseInverse = " ";
while (strlen($phraseUtilisateur) >= strlen($phraseInverse)) {
    $phraseInverse = $phraseUtilisateur[$positionLettre];
    $phraseUtilisateur = substr($phraseUtilisateur,0,-1);
}
echo $phraseInverse;