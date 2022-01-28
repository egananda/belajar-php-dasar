<?php

$first = [
    "First_name" => "Ega"
];


$last = [
    "Last_name" => "Nanda"
];


$FullName = $first + $last;

print_r($FullName);




$a = [
    "First_name" => "Ega",
    "Last_name"  => "Nanda Brilian"
];


$b = [
    "Last_name"  => "Ega",
    "First_name" => "Nanda Brilian"
];



var_dump($a === $b);
