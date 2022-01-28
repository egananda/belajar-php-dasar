<?php

$gender = "PRIA";

$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi bro!";
} else {
    $hi = "Hi nona!";
}

// ternery operator
$hi = $gender == "PRIA" ? "Hi bro" : "Hi Nona";

echo $hi;



$x = 10;
$y = $x == 10 ? "Benar!" : "Salah!";
echo $y;
