<?php

function nama($nama = "Anonymous")
{
    echo "Hallo, apa kabar $nama!" . PHP_EOL;
}


nama();
nama("Widiya");



function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Hasil total $first + $last adalah = $total" . PHP_EOL;
}

// integer
sum(100, 100);

// string
sum("100", "100");

// boolean
sum(true, false);

// array
// sum([], []);

// variabel argument list
// ... itu array
function SumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

$values = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

SumAll(1, 2, 3, 4, 5, 6, 7, 8, 9);
SumAll(...$values);
