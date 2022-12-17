<?php
declare(strict_types=1);

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

// 1 способ
$checkParity = function (int $number): string {
    if ($number % 2 === 0) {
        return "четное";
    } else {
        return "нечетное";
    }
};

// 2 способ
$checkParity2 = fn(int $number): string => $number & 1 ? "нечетное" : "четное";

$result = array_map($checkParity, $numbers);
$result2 = array_map($checkParity2, $numbers);

print_r($result);
print_r($result2);

