<?php

$nilai = "A";

if($nilai == "A") {
    echo "Anda lulus dengan sempurna" . PHP_EOL;
}else if ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus" . PHP_EOL;
}else if ($nilai == "D") {
    echo "Anda tidak lulus" . PHP_EOL;
}else{
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}