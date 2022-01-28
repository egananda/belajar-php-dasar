<?php


$SayHello = function (string $name) {
    echo "Hello, $name" . PHP_EOL;
};



$SayHello(strtoupper("Ega nanda brilian"));



function SayGoodBye($name, $filter)
{
    $FinalName = $filter($name);
    echo "GoodBye $FinalName" . PHP_EOL;
}

SayGoodBye("Ega", function (string $name): string {
    return strtoupper($name);
});



$FilterFunction = function (string $name): string {
    return strtoupper($name);
};


SayGoodBye("Ega", $FilterFunction);





// mengakses variabel diluar closure
$FirstName = "Ega";
$LastName  = "Nanda";



$SayHelloEga = function () use ($FirstName, $LastName) {
    echo "Hello, $FirstName $LastName" . PHP_EOL;
};


$SayHelloEga();
