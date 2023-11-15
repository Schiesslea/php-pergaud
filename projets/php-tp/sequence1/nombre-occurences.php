<?php
$phrase = readline('Saisir une phrase :');
$motOccurence = readline('Saisir un mot :');
echo "Le mot $motOccurence apparait ".substr_count($phrase, $motOccurence);