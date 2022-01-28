<?php

// var_dump(join(",", ["Anjing", "Kucing", "Koala", "Kambing"]));


// var_dump(substr("EGA NANDA BRILIAN", 4, 8));




// $nilai = 90;


// switch ($nilai):
//    case $nilai > 80:
//       echo "Anda mendapatkan nilai A";
//       break;
//    case $nilai >= 70:
//       echo "Anda mendaptkan nilai B";
//       break;
//    case $nilai <= 60:
//       echo "Anda mendapatkan nilai C";
//       break;
//    case $nilai < 50:
//       echo "Anda goblok!";
//       break;
// endswitch;



// $gender = "Pria";


// $hii = $gender == "Wedon" ? "Hi Bro!" : "Hi Nona!";


// echo $hii;



// $data = [];


// if (isset($data["action"])) {
//    $action = $data["action"];
// } else {
//    echo "Nothing.";
// }


// echo $action;


// function SumAll(...$values)
// {
//    $total = 0;
//    foreach ($values as $value) {
//       $total += $value;
//    }
// }

// sumAll(1, 2, 3);

// echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;





// function sayHello(string $name, $filter)
// {
//    $result = $filter($name);
//    echo "Hello $result" . PHP_EOL;
// }



// function semple(string $name): string
// {
//    return "semple $name";
// }




// sayHello("Ega", "strtolower");
// sayHello("Ega", "semple");



// $sayHello = function (string $name) {
//    echo "Hello $name" . PHP_EOL;
// };



// $sayHello("ega");


// function sayGoodBye(string $name, $filter)
// {
//    $result = $filter($name);
//    echo "Good bye $result" . PHP_EOL;
// }


// $filterFunction = function (string $name): string {
//    return strtoupper($name);
// };

// sayGoodBye("Ega", $filterFunction);




// $FirstName = "Ega";
// $LastName  = "Nanda Brilian";


// $fullName = function () use ($FirstName, $LastName) {
//    echo "$FirstName $LastName";
// };


// echo $fullName();




// $widStart = "Eti";
// $widEnd   = "Widiyaa";


// $sayWid = fn () => "Hello $widStart $widEnd" . PHP_EOL;


// echo $sayWid();




// function barang(string $name, callable $filter)
// {
//    $result = call_user_func($filter, $name);
//    echo "Hello, $result" . PHP_EOL;
// }


// barang("Buku", "strtoupper");
// barang("Ega", function (string $name) {
//    return strtolower($name);
// });
// barang("Buku", fn ($name) => strtoupper($name));



function factorialLoop(int $value): int
{
   $total = 1;
   for ($i = 1; $i <= $value; $i++) {
      $total = $total * $i;
   }

   return $total;
}


echo factorialLoop(5);
