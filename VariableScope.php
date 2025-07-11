<?php

$name = "Zen"; //global scope

function sayHello() {
    echo $name . PHP_EOL; //ini akan error karena tidak bisa mengakses variable global
}

sayHello();