<?php

function FactorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}


var_dump(FactorialLoop(5));







// memanggil functionnya sendiri
function VactorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * VactorialRecursive($value - 1);
    }
}


var_dump(VactorialRecursive(5));




function loop(int $value)
{
    if ($value == 0) {
        echo "selesai" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}


loop(3000000);
