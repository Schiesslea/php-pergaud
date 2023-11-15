<?php

// Déclarer et initialiser un tableau contenant des notes
$notes = [12,18,9,12,15,8,7,8,9,4,5,6,1,2,3,0];  // $notes = array(12,18,9);
// Accès à l'élément qui se trouve à l'index 0 dans le tableau $notes
echo $notes[0];
echo $notes[1];
echo $notes[2];
echo PHP_EOL;

// Affichage du tableau avec une boucle for
for ($i=0; $i<count($notes); $i++) {
    echo $notes[$i] . PHP_EOL;
}
echo PHP_EOL;

// Afficher le tableau avec une boucle foreach
foreach ($notes as $note) { // $note existe que dans le foreach
    echo $note . PHP_EOL;
}

echo PHP_EOL;
// Affichage du tableau avec une boucle for
for ($i=0; $i<count($notes); $i++) {
    echo "$i:$notes[$i]" . PHP_EOL;
}

echo PHP_EOL;
// Afficher le tableau avec une boucle foreach
foreach ($notes as $index => $note) { // $note existe que dans le foreach
    echo "$index:$note" . PHP_EOL;
}

// Affichage du tableau en mode debug
print_r($notes);
var_dump($notes);
echo PHP_EOL;

// Ajouter une nouvelle note
$notes[] = 20; // Permet d'ajouter une seule valeur
print_r($notes);
array_push($notes, 19,15,16,12.5); // Permet d'ajouter plusieurs valeurs
print_r($notes);