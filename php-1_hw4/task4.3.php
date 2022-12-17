<?php
declare(strict_types=1);

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',

            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$text = (string)readline("Введите предмет: ");

function search(string $searchThing, array $searchArray): bool
{
    foreach ($searchArray as $value) {
        if (is_array($value)) { // проверяем является переменая массивом или нет
            if (search($searchThing, $value)) {
                return true;
            }
        } elseif ($searchThing === $value) { // проверяем на совпадение
            return true;
        }
    }
    return false;
}

echo search($text, $box) ? "true" : "false";