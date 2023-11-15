<?php
$temperatureCelsius = readline('Saisir une température en Celsius :');
$temperatureFahrenheit = ( $temperatureCelsius * 1.8 ) + 32;
echo "la température en Fahrenheit est $temperatureFahrenheit °F";
