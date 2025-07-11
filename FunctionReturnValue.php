<?php

// Fungsi yang mengembalikan 1 return value
function sum(int $first, int $last) {
    $total = $first + $last;
    return $total;
}

$result = sum(10, 15);
var_dump($result);


// Fungsi yang mengembalikan return value yang dinamis
function getFinalValues(int $value) {
    if ($value >= 80) {
        return "A";
    } else if ($value >=70) {
        return "B";
    } else if ($value >=60) {
        return "C";
    } else if ($value >=50) {
        return "D";
    } else {
        return "E";
    }
    
    echo "Ups, ada yang salah" . PHP_EOL;
}

$score = getFinalValues(5);
var_dump($score);

// Mendeklarasikan Return Type dengan cara menambah titik dua dan type data setelah blok parameter
function sumAll(int $first, int $last) : int {
    $total = $first + $last;
    return $total;
}

$resultAll = sumAll(15, 15);
var_dump($resultAll);
