<?php

$emails = [
    "dupond" => "dupond@free.fr",
    "martin" => "martin@gmail.fr",
    "jean" => "jean@laposte.net",
    "bastien" => "bastien@gmail.com"
];


foreach ($emails as $nom => $email) {

    echo "L'adresse de $nom est : $email";
    echo PHP_EOL;
}
$emailsTrouve = [];
$domaine = strtolower(readline("Saisir un nom de domaine : "));
foreach ($emails as $nom => $email) {
    if (strpos($email, $domaine)) {
        $emailsTrouve[] = $email;
    }
}
foreach ($emailsTrouve as $email) {
    echo "Les emails contenant comme nom de domaine : $domaine sont : $email". PHP_EOL;
}