<?php

$name = "Zaenal";
$age = 27;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

# Variable variables
# Walaupun PHP punya kemampuan ini, tapi lebih baik tidak digunakan
$contoh = "Zaenal";
$$contoh = "Arifin";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "Zaenal : ";
echo $Zaenal;
echo "\n";