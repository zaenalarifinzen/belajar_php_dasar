<?php

function sayHello ($name) {
    echo "Hello $name" .PHP_EOL;
}

sayHello("Zaenal");
sayHello("Arifin");

// Default Argument Value
function sayHi ($name = "anonymous") {
    echo "Hello $name" .PHP_EOL;
}

sayHi();
sayHi("Arifin");


function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "50");
sum(true, false);
// sum([], []); //ini akan error

function sumAll (...$values) {
    $total = 0;
    foreach($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1,2,3,4,5);
