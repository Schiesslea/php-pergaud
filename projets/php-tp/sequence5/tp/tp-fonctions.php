<?php

function convertirCelsiusFahrenheit(float $celscius) : float {
    return ($celscius*9/5) +32;
}

function genererMotDePasse(int $longueur) : string {
    $caractere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $motDePasse = '';
    for($i=0; $i<$longueur; $i++) {
        $motDePasse .= $caractere[rand(0, strlen($caractere)-1)];
    }
    return $motDePasse;
}

function genererNumeroAdherent() : string {
    $numAdherent = 'AD-';
    for($i=0; $i<6; $i++) {
        $numAdherent .= rand(0, 9);
    }
    return $numAdherent;
}

function genererAcronyme(string $phrase) : string {
    $phrase = explode(' ', $phrase);
    $acronyme = "";
    foreach ($phrase as $mot) {
        $lettre = strtoupper(substr($mot, 0,1));
        $acronyme .= $lettre;
    }
    return $acronyme;
}

function genererNumerosBillets(int $nombreBillets) : array {

}