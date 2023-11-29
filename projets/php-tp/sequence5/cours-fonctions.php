<?php

function estPair(int $nb) : bool {
    return $nb % 2 == 0;
}

function retournerIdentite(string $prenom, string $nom) : string {
    return ucfirst(strtolower($prenom)) . ' ' . strtoupper($nom);
}

