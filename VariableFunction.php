<?php

function foo() {
    echo "Foo" . PHP_EOL;
}

function bar() {
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "Foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "Bar";
$functionYangAkanDipanggil();


// Mengirim Function ke parameter

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name) : string {   
    return "Sample $name";
}

sayHello("Zaenal", "sampleFunction");
sayHello("Zaenal", "strToUpper");
sayHello("Zaenal", "strToLower");