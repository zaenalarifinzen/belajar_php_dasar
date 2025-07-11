<?php

$counter = 100;

do {
    echo "ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
} while ($counter <=10);

// Perbedaannya dengan While loop adalah :
# While loop akan melakukan pengecekan dulu, jika true baru mengeksekusi perulangan
# kalau di Do While Lopp akan melakukan perulangan dulu 1 kali, lalu melakukan pengecekkan
# Jika hasilnya teru akan menjalankan perulangan lagi, jika false akan berhenti