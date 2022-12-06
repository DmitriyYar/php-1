<?php
define("TASK_STRING", "Какая задача стоит перед вами сегодня?");
define("TIME_STRING", "Сколько примерно времени эта задача займет?");

$quantityTask = 3;

$name = readline("Как вас завут? ");
$age =  (int)readline("Сколько вам лет? ");

$count = 1;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK_STRING);
$$time = (int)readline(TIME_STRING);

$count++;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK_STRING);
$$time = (int)readline(TIME_STRING);

$count++;
$task = "task$count";
$time = "time$count";
$$task = readline(TASK_STRING);
$$time = (int)readline(TIME_STRING);

$totalTime = $time1 + $time2 + $time3;

echo <<<OUT
Вас зовут $name, вам $age лет.
$name, сегодня у вас запланировано $quantityTask приоритетных задачи на день:
- $task1 ({$time1}ч)
- $task2 ({$time2}ч)
- $task3 ({$time3}ч)
Примерное время выполнения плана = {$totalTime}ч
OUT;
