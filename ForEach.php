<?php

$names = ["Muhammad", "Unais", "Basya"];

// For Looping Biasa dari array
for ($i=0; $i < count($names) ; $i++) { 
    echo "Data ke $i : {$names[$i]}" . PHP_EOL;
}

// Cara yang lebih mudah menggunakan For Each dari array
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}


// For Each untuk Map
$person = [
    "firs_name" => "Muhammad",
    "middle_name" => "Unais",
    "last_name" => "Basya"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
