<?php

require 'cours-fonctions.php';

// Test
$prenom = readline("Saisir votre prénom : ");
$nom = readline("Saisir votre nom : ");
$identite = retournerIdentite($prenom, $nom);
echo $identite;
