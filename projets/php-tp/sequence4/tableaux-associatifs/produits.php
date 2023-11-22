<?php

$produits = [
    "pain" => 1,
    "jambon" => 5,
    "soda" => 3,
    "saucisson" => 10
];

$totalProduit = array_sum($produits);
echo "Le prix total des produits est de $totalProduit €";