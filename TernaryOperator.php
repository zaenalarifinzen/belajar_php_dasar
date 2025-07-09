<?php

// INI JIKA MENGGUNAKAN IF OPERATOR BIASA

$gender = "Pria";
$hi = null;

if ($gender == "Pria") {
    $hi = "Hi Bro!";
} else {
    $hi = "Hi, Sis!";
}

echo $hi . PHP_EOL;


// INI JIKA MENGGUNAKAN TERNARY OPERATOR

$hi = $gender == "Pria" ? "Hi Bro!" : "Hi Sis!";
echo $hi . PHP_EOL;