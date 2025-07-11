<?php

// BREAK
# ini akan menghentikan perulangan dan tidak melanjutkan ke perulangan selanjutnya

$counter = 1;

while (true) {
    echo "ini adalah while ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}


// CONTINUE
# ini akan menghentikan perulangan saat ini atau kata lain seperti skip

for ($counter2 = 1; $counter2 <= 100 ; $counter2++) { 

    // skip bilangan genap (yang dibagi 2 sisanya 0)
    if ($counter2 % 2 == 0) {
        continue;
    }
    echo "Counter : $counter2" . PHP_EOL;
}