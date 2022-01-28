<?php

function FactorialRecursive(int $value)
{
   if ($value == 1) {
      return 1;
   } else {
      return $value * FactorialRecursive($value - 1);
   }
}

var_dump(FactorialRecursive(5));
