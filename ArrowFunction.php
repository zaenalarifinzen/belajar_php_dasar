<?php

$first_name = "Zaenal";
$last_name = "Arifin";

$anonymousFunction = function () use ($first_name, $last_name) : string {
    return "Hello $first_name $last_name" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $first_name $last_name" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();