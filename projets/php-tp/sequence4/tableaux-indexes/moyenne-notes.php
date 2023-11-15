<?php

$notes = [10,12.5,14,7,15,9.5,8];
$moyenne = 0;
$sommeNote = 0;
foreach ($notes as $note) {
    $sommeNote += $note;
}

$moyenne = $sommeNote / 9;
echo "Votre moyenne est de $moyenne";
echo PHP_EOL;
if ($moyenne>=10 && $moyenne<12) {
    echo "Vous avez la mention passable";
} elseif ($moyenne>=12 && $moyenne<14) {
    echo "Vous avez la mention assez bien";
} elseif ($moyenne>=14 && $moyenne<16) {
    echo "Vous avez la mention bien";
} elseif ($moyenne>=16) {
    echo "Vous avez la mention très bien";
} else {
    echo "Vous n'avez pas votre diplôme";
}

