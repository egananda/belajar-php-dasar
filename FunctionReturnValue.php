<?php

function sum(float $first, int $second): int
{
    $total = $first * $second;

    return $total;
}


$result = sum(20.1, 10);

var_dump($result);




function GetFinalValue(int $values): string
{
    if ($values >= 80) {
        return "A";
    } elseif ($values >= 70) {
        return "B";
    } elseif ($values >= 60) {
        return "C";
    } elseif ($values >= 50) {
        return "D";
    } else {
        echo "Ups...";
    }
}



$hasil = GetFinalValue(30);

var_dump($hasil);
