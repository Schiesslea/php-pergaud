<?php
//Demander la saisie d'un mot
//Affiche si le mot est commence par la lettre p
$motUtilisateur = readline("Saisissez un mot :");
//$motUtilisateur = strtolower($motUtilisateur);
if (str_starts_with(strtolower($motUtilisateur), 'p')) {
    echo "$motUtilisateur commence par un p";
} else {
    echo "$motUtilisateur ne commence pas par un p";
}
echo PHP_EOL;
//Afficher si le mot contient plus de 5 lettres (inclut)
if (strlen($motUtilisateur) >= 5) {
    echo "$motUtilisateur a plus de 5 lettres";
} else {
    echo "$motUtilisateur a moins de 5 lettres";
}
