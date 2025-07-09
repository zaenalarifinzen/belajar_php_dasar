<?php

// INI PENGECEKAN JIKA MENGGUNAKAN IF OPERATOR BIASA
$data = [
    "action" => "Create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// KITA GANTI DENGAN NULL COALESCING OPERATOR
$data1 = [];
$action1 = $data1["action"] ?? "Nothing";

echo $action1 . PHP_EOL;