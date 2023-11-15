<?php
//Demander la saisie d'un nombre
//Afficher si le nombre est pair ou impair
$nombreUtilisateur = readline("Saisir un nombre :");
if ($nombreUtilisateur % 2 == 0) {                           //% est un modulo, permet d'avoir le reste
    echo "$nombreUtilisateur est pair";
} else {
    echo "$nombreUtilisateur est impair";
}
