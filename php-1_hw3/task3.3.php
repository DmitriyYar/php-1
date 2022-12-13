<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 4,
        'Смирнова Христина' => 2,
        'Архаткина Владислава' => 3,
        'Мещерякова Мария' => 4,
        'Саврасова Фаина' => 5,
        'Хромченко Зинаида' => 3,
        'Протасова Майя' => 2,
        'Золин Владилен' => 4,
        'Сазыкин Роман' => 5
    ],
    'БАП20' => [
        'Ябров Тимур' => 4,
        'Белорусов Ефрем' => 2,
        'Ягода Назар' => 5,
        'Ярилова Розалия' => 5,
        'Нырко Платон' => 4,
        'Калинин Агап' => 3,
        'Никифоров Юлиан' => 2,
        'Сазонов Роман' => 4,
        'Архандеева Мария' => 5,
        'Антонова Анна' => 2
    ],
    'БАП21' => [
        'Долгов Сергей' => 4,
        'Гришина Мария' => 2,
        'Макаров Павел' => 5,
        'Андрианов Антон' => 5,
        'Протасова Светлана' => 4,
        'Иванов Денис' => 3,
        'Титова Юлия' => 5,
        'Никитин Александр' => 2,
        'Солдаткин Николай' => 4,
        'Антипов Алексей' => 3
    ]
];
$valueAverage = [];   // список успеваемости групп
$studentsDelete = []; // список студентов на отчисление
$str = '';
$flag = true;

foreach ($students as $group => $studentList) {
    ksort($studentList);
    $valueAverage[$group] = array_sum($studentList) / sizeof($studentList);
    foreach ($studentList as $student => $estimation) {
        if ($estimation < 3) {
            $studentsDelete[$group][] = $student;
        }
    }
}

foreach ($valueAverage as $group => $result) {
    if (max($valueAverage) === $result && $result !== 0) {
        if ($flag) {
            $str .= "* Наивысшее значение успеваемости ($result) у следующих групп:" . PHP_EOL;
            $flag = false;
        }
        $str .= "- $group" . PHP_EOL;
    }
}

echo $str; // вывод групп с наивысшим значением успеваемости

$str = "* Список студентов на отчисление:" . PHP_EOL;
foreach ($studentsDelete as $group => $listStudents) {
    $str .= "Группа $group:" . PHP_EOL;
    foreach ($listStudents as $student) {
        $str .= "- $student" . PHP_EOL;
    }
}

echo $str; // вывод списка студентов на отчисление
print_r($studentsDelete);
