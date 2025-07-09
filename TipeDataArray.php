<?php

# membuat data array dengan cara 1
$values = array(10, 9, 5, 5);
var_dump($values);

# membuat data array dengan cara 2
$names = ["Muhammad", "Unais", "Basya"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Zaenal";
var_dump($names[0]);

# ARRAY SEBAGAI MAP
# Di PHP, array sebenarnya terdiri dari index dan value, misal :
$unais = array(
    "unais",
    "Muhammad Unais Basya",
    2
);

# sebenarnya adalah 
$unais_array = array(
   0 => "unais",
   1 => "Muhammad Unais Basya",
   2 => 2
);

# jika dijadikan map maka
$unais_map = array(
   "id" => "unais",
   "name" => "Muhammad Unais Basya",
   "age" => 2
);

var_dump($unais_map);
var_dump($unais_map["name"]);

# Bisa juga membuat map dengan kurung kotak []
$zaenal = [
    "id" => "zaenal",
    "name" => "Zaenal Arifin",
    "age" => 27
];
var_dump($zaenal["id"]);


# ARRAY DI DALAM ARRAY
$fathur = [
    "id" => "fathur",
    "name" => "Fathhur Rohmah",
    "age" => 26,
    "address" => array (
        "city" => "Kebumen",
        "country" => "Indonesia"
    )
];
var_dump($fathur["address"]["country"]);