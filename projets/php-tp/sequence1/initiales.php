<?php
$prenom = readline('Saisir votre prénom :');
$nom = readline('Saisir votre nom :');
$initialesPrenom=$prenom[0];
$initialesnom=$nom[0];
echo strtoupper("Vos initiales sont : $initialesPrenom$initialesnom");