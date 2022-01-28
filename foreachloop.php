<?php

$nama = ["Ega", "Nanda", "Brilian"];

$persons = [
    "First name"  => "Ega",
    "Middle name" => "Nanda",
    "Last name"   => "Brilian"
];

// for ($i = 0; $i < count($nama); $i++) {
//     echo "Data ke $i - $nama[$i]" . PHP_EOL;
// }


// foreach
// foreach ($nama as $n) {
//     echo "Data - $n" . PHP_EOL;
// }


// foreach 2 
foreach ($persons as $key => $value) {
    echo $value;
}
