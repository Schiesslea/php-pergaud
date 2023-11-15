<?php

//Partie 1
$a = True;
$nbNote = 0;
$noteTableau = [];

while ($a == True) {
    $note = readline("Saisir une note (q pour arrêter) : ");
    echo PHP_EOL;
    if ($note != 'q') {
        if ($note>=0 && $note<=20) {
            $nbNote++;
            $noteTableau[] = $note;
        } else {
            echo "La note saisie est incorrecte.";
            echo PHP_EOL;
        }
    } else {
        $a = False;
    }
}
echo "Vous avez saisie $nbNote notes.";
echo PHP_EOL;
echo "Les notes saisies sont ";
foreach ($noteTableau as $note) {
    echo $note." ";
}

//Partie 2
$moyenne=0;
$noteTabSup = [];
foreach ($noteTableau as $note) {
    if ($note>=10) {
        $noteTabSup[] = $note;
    }
}
foreach ($noteTabSup as $note) {
    $moyenne+=$note;
}
if (count($noteTabSup) == 0) {
    echo PHP_EOL;
    echo "Il n'y a aucune note égale ou supérieur à 10";
} else {
    $moyenne/=2;
    echo PHP_EOL;
    echo "La moyenne des notes supérieurs ou égales à 10 est $moyenne";
}
