<?php
$number = 0;

do {
    $number = (int)readline("Введите число больше нуля: ");
    $number = ($number > 0) ? $number : 0;
} while (!$number);

$number = $number % 8;

switch ($number) {
    case 1:
        echo "Это палец №1";
        break;
    case 0:
    case 2:
        echo "Это палец №2";
        break;
    case 3:
    case 7:
        echo "Это палец №3";
        break;
    case 4:
    case 6:
        echo "Это палец №4";
        break;
    case 5:
        echo "Это палец №5";
        break;
}
