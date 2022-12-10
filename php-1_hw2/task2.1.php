<?php
const QUESTION = "В каком году прошла первая Олимпиада в СССР?
Варианты: 1977, 1980 или 1982 год.";

$answer = '';

do {
    echo QUESTION . PHP_EOL;
    $answer = readline("Ваш ответ: ");
    $answer = ($answer == "1977" || $answer == "1980" || $answer == "1982") ? $answer : '';
} while (!$answer);

if ($answer == "1980") {
    echo "Поздравляем, правильный ответ!";
} else {
    echo "Ответ не верный.";
}
