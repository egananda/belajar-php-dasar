<?php
// mengubah array menjadi array baru dengan function 
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$MapFunction = fn (int $value) => $value * 10;

$DataResult = array_map($MapFunction, $data);

var_dump($DataResult);


// membalikan array
rsort($data);
var_dump($data);

// mengambil array keys
$data2 = ["kucing", 'kambing', "sapi"];
var_dump(array_keys($data2));

// mengambil array values
var_dump(array_values($data2));
