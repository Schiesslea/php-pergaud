<?php

// Définir une fonction qui affiche "Bonjour"
function direBonjour() : void {
    echo "Bonjour".PHP_EOL;
}
// Appeler la fonction afin de l'exécuter
direBonjour();

// Définir une fonction qui affiche "Bonjour $nom"
// La fonction a un paramètre : le nom
function direBonjourNom(string $prenom) : void {
    // $nom est une variable locale à la fonction
    echo "Bonjour $prenom".PHP_EOL;
}
// Appeler la fonction afin de l'exécuter
direBonjourNom("Andy");
direBonjourNom("Maxime");
$prenom = "andy";
direBonjourNom($prenom);

// Définir une fonction permettant de calculer et retourner la somme de deux nombres
function additionner (int $nb1, int $nb2) : int {
    // $resultat est une variable locale à la fonction
    return $nb1 + $nb2;
}
// Appel à la fonction
$resultat = additionner(10,20);
echo "Le résultat est : $resultat ";
echo PHP_EOL;
echo "Le résultat est : " . additionner(10,20);
echo PHP_EOL;
