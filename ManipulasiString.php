<?php

$name = "Zaenal Arifin";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


// Konversi dari satu tipe data ke tipe data lainnya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"500";
var_dump($valueInt);

$valueFloat = (float)"1.05";
var_dump($valueFloat);

// Mengambil suatu karakter dalam string
$name2 = "Zen";
echo $name2[0] . PHP_EOL;
echo $name2[1] . PHP_EOL;
echo $name2[2] . PHP_EOL;

// Variable Parsing
echo "Halo " . $name2 . " selamat belajar PHP" . PHP_EOL; # cara lama
echo "Halo $name2, selamat belajar PHP" . PHP_EOL; # cara lebih simpel

