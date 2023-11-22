<?php

// Déclarer et initialiser un tableau de notes
// Clé = nom de l'étudiant
// Valeur = note
$notes = [
    "dupond" => 12,
    "martin" => 16,
    "durand" => 7,
    "JEAN" => 10
];

// Ajouter une nouvelle note (15) pour l'étudiant Petit
$notes["petit"] = 15;
print_r($notes);
// Si la clé existe déjà, la nouvelle valeur remplace l'ancienne. Modifier la note de l'étudiant Petit
$notes["petit"] = 10;
print_r($notes);
echo PHP_EOL;

// Afficher l'ensemble des notes = ensemble des valeurs
foreach ($notes as $note) {
    echo "$note ";
}
echo PHP_EOL;

// Afficher le nom de chaque étudiant avec sa note
foreach ($notes as $nom => $note) {
    $nom = ucfirst(strtolower($nom));
    echo "$nom : $note".PHP_EOL;
}
echo PHP_EOL;

// Afficher le nom de chaque étudiant (ensemble des clés)
// array_keys permet de récupérer seulement la clé d'un tableau associatif
$noms = array_keys($notes);
foreach ($noms as $nom) {  // Peut directement mettre array_keys dans la boucle foreach
    $nom = ucfirst(strtolower($nom));
    echo "$nom".PHP_EOL;
}
echo PHP_EOL;

// Supprimer l'élément dont la clé est JEAN
unset($notes["JEAN"]);
print_r($notes);

// Calculer et afficher la moyenne des notes
// Version 1
if (count($notes) > 0) {
    $moyenne = 0;
    foreach ($notes as $note) {
        $moyenne += $note;
    }
    $moyenne /= count($notes);
    echo $moyenne;
}
echo PHP_EOL;

// Version 2
if (!empty($notes)) { // ! permet de dire différent, peut être mis devant la fonction
    $moyenne = array_sum($notes) / count($notes);
    echo round($moyenne, 2);
}
echo PHP_EOL;

// Afficher la liste des étudiants triée par ordre alphabétique
$noms = array_keys($notes);
rsort($noms); //Trier les valeurs d'un tableau indexé
print_r($noms);

// Rechercher et afficher la meilleur note
$meilleurNote = max($notes);
echo $meilleurNote;
echo PHP_EOL;

// Rechercher et afficher le nom des étudiants ayant une note >=10
// Si la liste est vide, afficher un message spécifique
$noms = [];
foreach ($notes as $nom => $note) {
    if ($note >= 10) {
        $noms[] = $nom;
    }
}
if (empty($noms)) {
    echo "La liste est vide";
} else {
    sort($noms);
    foreach ($noms as $nom) {
        echo "$nom ";
    }
}