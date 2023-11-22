<?php

$contacts = [
    "Maxime" => "0768725222",
    "Phong" => "0785283994",
    "Hugo" => "0602447580",
    "Ethan" => "0679986384",
    "Antoine" => "0637663739"
];

$nomUtilisateur = readline("Saisir un nom : ");
$contactTrouve = array_key_exists($nomUtilisateur, $contacts);


if ($contactTrouve != NULL) {
        echo "$nomUtilisateur a comme numéro de téléphone : $contacts[$nomUtilisateur]";
} else {
    echo "Le contact n'a pas été trouvé";
}