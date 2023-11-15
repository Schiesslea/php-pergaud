<?php

$tabElement = [];
$compteur = 0;
$pourcent = 0;
$texteRouge = "\033[31m";
$texteVert = "\033[32m";
$normal = "\033[0m";
echo "début du traitement";
echo PHP_EOL;
for ($i=0; count($tabElement)<100000; $i++) {
    $compteur++;
    $tabElement[] = 1;
    while ($compteur==1000) {
        $compteur=0;
        echo 'En cours '.$texteRouge.$pourcent.'%'.$normal;
        $pourcent=$pourcent+1;
        echo PHP_EOL;
    }
}
echo $texteVert."100%".$normal;
echo PHP_EOL;
echo "fin du traitement";
echo PHP_EOL;
echo "100000 valeurs ont été traitées !";

