<?php
declare(strict_types=1);

$numbers = range(1,20);

function calculation(array $numbers): array
{
    $result["max"] = max($numbers);
    $result["min"] = min($numbers);
    $result["avg"] = array_sum($numbers)/sizeof($numbers);

    return $result;
}

print_r(calculation($numbers));
