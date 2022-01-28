<?php

goto a;
echo "Hello Goto" . PHP_EOL;

a:


echo "Hello World";


$counter = 1;

while (true) {
    echo "Tolol-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}


end:
echo "Goto Loop";
