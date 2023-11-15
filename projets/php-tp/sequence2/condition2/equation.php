<?php

$a=readline("Entrez le coefficiant a : ");
$b=readline("Entrez le coefficiant b : ");
$c=readline("Entrez le coefficiant c : ");
$delta=$b*$b-(4*$a*$c);
if ($delta > 0) {
    $racine1=-($b-sqrt($delta))/(2*$a);
    $racine2 = -($b+sqrt($delta))/(2*$a);
    echo "Il y a 2 solutions distinctes : 
                x1=$racine1 
                x2=$racine2 ";
} elseif ($delta == 0) {
    $racine=-$b/(2*$a);
    echo "Il y a une solution : $racine";
} else {
    echo "Cette équation n'a pas de solutions";
}