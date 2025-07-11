<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Zaenal");

function sayGoogBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoogBye("Zaenal", function(string $name): string{
    return strtoupper($name);
});