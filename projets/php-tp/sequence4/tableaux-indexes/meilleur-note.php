<?php

//Version avec boucle
$notes = [10,12.5,14,7,15,9.5,8];
$meilleurNote = $notes[0];
for ($i=0; $i<count($notes); $i++) {
    if ($notes[$i]>$meilleurNote) {
        $meilleurNote = $notes[$i];
    }
}
echo "Votre meilleur note est $meilleurNote";
echo PHP_EOL;

//Version avec fonction proposé de php
echo 'Votre meilleur note est ' . max($notes);