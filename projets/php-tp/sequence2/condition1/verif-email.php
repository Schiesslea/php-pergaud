<?php
$email = readline("Saisir une adresse mail :");
if (strpos($email, '.@gmail.com')) {        //strpos permet de vérifier si une valeur est bien présente dans notre variable
    echo "L'adresse $email n'est pas valide";
} else {
    echo "L'adresse $email est valide";
}
