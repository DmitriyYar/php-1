<?php
define("TASK_STRING", "Какая задача стоит перед вами сегодня?");
define("TIME_STRING", "Сколько примерно времени эта задача займет?");

$name = readline("Как вас завут? ");
$age =  (int)readline("Сколько вам лет? ");
$task1 = readline(TASK_STRING);
$time1 = (int)readline(TIME_STRING);
$task2 = readline(TASK_STRING);
$time2 = (int)readline(TIME_STRING);
$task3 = readline(TASK_STRING);
$time3 = (int)readline(TIME_STRING);

$totalTime = $time1 + $time2 + $time3;

echo <<<OUT
Вас зовут $name, вам $age лет.
$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
Примерное время выполнения плана = {$totalTime}ч
OUT;
