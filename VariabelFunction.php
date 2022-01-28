<?php

function foo()
{
    echo "Bang, Gif Alok";
}


// $VariabelYangAkanDiPanggil = "foo";
// $VariabelYangAkanDiPanggil();



function SayHello(string $name, $filter)
{
    $FinalName = $filter($name);

    echo "Hello $FinalName" . PHP_EOL;
}


function SempleFunction(string $name): string
{
    return "Semple $name";
}


SayHello("Ega", "SempleFunction");
