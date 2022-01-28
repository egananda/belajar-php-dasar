<?php

//anonymous function
$FirstNames = "Ega";
$LastNames  = "Nanda";

$SayHelloEga = function () use ($FirstNames, $LastNames): string {
    return "Hello, $FirstNames $LastNames" . PHP_EOL;
};




// arrow function
$FirstName = "Eti";
$LastName  = "Widiya";


$SayHelloWid = fn () => "Hello $FirstName $LastName" . PHP_EOL;


echo $SayHelloWid();
echo $SayHelloEga();
