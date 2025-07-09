<?php

$name = "Zaenal";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

# Mengecek apakah sebuah variable itu null atau tidak
echo "Is name Null? :";
echo is_null($name);
echo "\n";
var_dump(is_null($name));
echo "\n";

# Menghapus sebuah variable
$contoh = "Example";
unset($contoh);

echo $contoh; # ini akan menghasilkan error karena variable sudah dihapus

