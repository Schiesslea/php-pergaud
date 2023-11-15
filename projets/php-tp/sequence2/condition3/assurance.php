<?php
$age = readline("Saisir votre âge : ");
$sexe = readline("Saisir votre sexe ('M' ou 'F') : ");

if (strtoupper($sexe) == "M" && $age>22) {
    echo "Vous devez payer la surprime";
} elseif (strtoupper($sexe) == "F" && $age>=20 && $age<=30) {
    echo "Vous devez payer la surprime";
} else {
    echo "Vous ne devez pas payer la surprime";
}