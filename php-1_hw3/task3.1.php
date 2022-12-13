<?php
$data1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$data2 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$result = [];

// 1 способ
foreach ($data1 as $key => $value) {
    $result[] = $value * $data2[$key];
}

print_r($result);

// 2 способ
$result = [];

for ($i = 0; $i < sizeof($data1); $i++) {
    $result[] = $data1[$i] * $data2[$i];
}

print_r($result);
