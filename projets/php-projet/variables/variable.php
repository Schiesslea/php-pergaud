<?php
// Déclarer et initialiser une variable contenant le prénom d'une personne
$prenom = "Louis";
echo $prenom;
$prenomPersonne = "Louis"; //Notation CamelCase
echo PHP_EOL;
// Modification de la variable prenom
$prenom = "Pierre";
echo $prenom;
// Déclarer et initialiser une variable contenant le résultat de 5 + 8
$addition = 5+8;
echo PHP_EOL;
echo $addition;
echo PHP_EOL;
// Concaténation de chaines : utilisation de l'opérateur .
echo "Mon prénom est ".$prenom;
echo PHP_EOL;
$prenom = "Jean";
echo "Mon prénom est ".$prenom;
// Concaténation de chaine : utilisation de l'interpolation
echo PHP_EOL;
echo "Mon prénom est $prenom";
echo PHP_EOL;
echo 'Mon prénom est $prenom';
echo PHP_EOL;
$presentation = "Mon prénom est $prenom";
echo $presentation;
echo PHP_EOL;
echo 'Bonjour je m\'appelle Andy';
echo PHP_EOL;