<?php

$name = "Ega";
$OtherName = &$name;
$OtherName = "Nanda" . PHP_EOL;

echo $name;


function increment(&$value)
{
    $value++;
}


$counter = 1;
increment($counter);
echo $counter;



function y(&$value)
{
    $value++;
}

$x = 10;
y($x);
echo $x;
