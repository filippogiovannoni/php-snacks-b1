<?php

## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numbers = [];

while (count($numbers) < 15) {
    $randomNumber = rand(1, 50);

    if (!in_array($randomNumber, $numbers)) {
        array_push($numbers, $randomNumber);
    }
}

var_dump($numbers);
