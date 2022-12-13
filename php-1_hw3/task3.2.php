<?php
$data1 = ['счастья', 'здоровья', 'тепла', 'полёта', 'везения', 'уюта', 'настроения', 'солнца', 'позитива', 'юмора'];
$data2 = ['бесконечного', 'крепекого', 'сияющего', 'чистого', 'превосходного', 'отличного', 'замечательного', 'яркого', 'стабильного', 'сказочного'];
$result = [];
$quantity = 3;

$name = readline('Как вас зовут? ');

$rand_keys_1 = array_rand($data1, $quantity);
$rand_keys_2 = array_rand($data2, $quantity);

for ($i = 0; $i < $quantity; $i++) {
    $result[] = $data1[$rand_keys_1[$i]] . " " . $data2[$rand_keys_2[$i]];
}
$str = "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ";
$lastValue = array_pop($result);
$str .= implode(', ', $result) . " и " . $lastValue . "!";

echo $str;
