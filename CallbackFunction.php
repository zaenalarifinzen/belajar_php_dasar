<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Zaenal", "strtoupper");
sayHello("Zaenal", "strtolower");
sayHello("Zaenal", function(string $name) : string {
    return strtoupper($name);
});
sayHello("Zaenal", fn($name) => strtoupper($name));