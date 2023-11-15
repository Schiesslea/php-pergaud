<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$equipeCherche = readline("Saisir une équipe : ");
echo "---------------Version boucle------------------";
echo PHP_EOL;
for ($i=0; $i<count($equipes); $i++) {
    if (strtoupper($equipes[$i])==strtoupper($equipeCherche)) {
        echo "$equipes[$i] sera présente à la prochaine coupe du monde";
        break;
    }
}

if ($i>=count($equipes)) {
    echo "$equipeCherche ne sera pas présente à la prochaine coupe du monde";
}
echo PHP_EOL;
echo "---------------Version fonction PHP------------------";
echo PHP_EOL;
if (in_array(strtoupper($equipeCherche),array_map('strtoupper', $equipes) )) {
    $key=array_search(strtoupper($equipeCherche),array_map('strtoupper', $equipes));
    echo "$equipes[$key] sera présente à la prochaine coupe du monde";
} else {
    echo "$equipeCherche ne sera pas présente à la prochaine coupe du monde";
}