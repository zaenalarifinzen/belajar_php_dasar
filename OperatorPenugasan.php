<?php

$total = 0;

$fruit = 5000;
$chicken = 10000;
$OrangeJuice = 5000;

# versi normal
$total = $total + $fruit;
$total = $total + $chicken;
$total = $total + $OrangeJuice;

var_dump($total);

# versi singkat
$total += $fruit;
$total += $chicken;
$total += $OrangeJuice;

var_dump($total);