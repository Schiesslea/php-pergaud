<?php
$prixHt=readline('Saisir le prix HT :');
$tauxTva=readline('Saisir un taux de TVA (en pourcentage) :');
$prixTtc=($prixHt/100)*($tauxTva+100);
echo "Le prix TTC est ". round($prixTtc, 2);
