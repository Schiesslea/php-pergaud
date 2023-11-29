<?php

function incrementer(int& $nombre) : void {
    $nombre += 1;
}

$compteur = 1;
incrementer($compteur);
echo $compteur;