<?php

$counter = 1;

while ($counter <= 10) {
    echo "ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

// Syntac lain untuk While Loop
$counter2 = 1;
while ($counter2 <= 10) :
    echo "ini adalah while loop lain ke-$counter2" . PHP_EOL;
    $counter2++;
endwhile;

