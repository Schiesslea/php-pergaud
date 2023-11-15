<?php

$nombreUtilisateur = readline("Saisir un nombre entier : ");
for ($i=0; $i<=$nombreUtilisateur; $i++) {
    if ($i % 2 == 0) {
        echo $i ." ";
    }
}

