<?php

$nombreUtilisateur = readline("Saisir un nombre entre 0 et 1000 : ");
$compteur = 0;
$nombreMachine = random_int(0,1000);

while ($nombreUtilisateur<0 || $nombreUtilisateur>1000) {
    $nombreUtilisateur = readline("Saisir un nombre entre 0 et 1000 : ");
}

while ($nombreUtilisateur != $nombreMachine) {
    $compteur++;
    $nombreMachine = random_int(0,1000);
    if ($compteur >= 200) {
        echo "Tu n'as pas deviné en moins de 200 coups !";
        break;
    }
}
if ($compteur < 200) {
    echo "Le nombre à deviner a été trouvé en $compteur coups";
}

