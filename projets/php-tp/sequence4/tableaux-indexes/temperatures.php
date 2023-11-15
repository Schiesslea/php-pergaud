<?php

$tempCelsius = [10, 15, 14];
$tempFahrenheit = [];
$fahrenheit = 0;
foreach ($tempCelsius as $temp) {
    $fahrenheit = ($temp * 1.8) + 32;
    $tempFahrenheit[] = $fahrenheit;
}
echo "Les températures en Fahrenheit sont ";
foreach ($tempFahrenheit as $temp) {
    echo $temp." ";
}