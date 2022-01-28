<?php

function SayHello(string $name, callable $filter)
{
    $FinalName = call_user_func($filter, $name);
    echo "Hello, $FinalName" . PHP_EOL;
}



SayHello("Ega", "strtolower");
SayHello("Ega", "strtouppower");
call_user_func("Ega", "strtoupper");
