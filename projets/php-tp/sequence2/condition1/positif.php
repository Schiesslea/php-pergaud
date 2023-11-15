<?php
//Demander la saisie d'un nombre à l'utilisateur
//Afficher si le nombre saisie est positif ou négatif
$nombreUtilisateur = readline("Saisissez un nombre :");
if ($nombreUtilisateur>=0) {
    echo "$nombreUtilisateur est positif";
} else {
    echo "$nombreUtilisateur est négatif";
}

