<?php
$str = '';
$quantityTask = 0;
$totalTime = 0;

$name = readline("Как вас завут? ");
$age = (int)readline("Сколько вам лет? ");

do {
    $quantityTask = (int)readline("Введите количество запланированных задач на день (от 1 до 10): ");
    $quantityTask = ($quantityTask >= 1 && $quantityTask <= 10) ? $quantityTask : 0;
} while (!$quantityTask);

for ($i = 1; $i <= $quantityTask; $i++) {
    $task = "task$i";
    $time = "time$i";
    $$task = readline("Какая $i задача стоит перед вами сегодня? ");
    $$time = (int)readline("Сколько примерно времени эта задача займет? ");
}

$str .= "Вас зовут $name, вам $age лет." . PHP_EOL;
$str .= "$name, сегодня у вас запланировано $quantityTask приоритетных задачи на день:" . PHP_EOL;
for ($i = 1; $i <= $quantityTask; $i++) {
    $task = "task$i";
    $time = "time$i";
    $str .= "- {$$task} ({$$time}ч)" . PHP_EOL;
    $totalTime += $$time;
}
$str .= "Примерное время выполнения плана = {$totalTime}ч";

echo $str;
