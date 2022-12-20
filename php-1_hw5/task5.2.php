<?php

include "User.php";
include "Task.php";
include "Comment.php";
include "TaskService.php";

// создаем первого пользователя с задачей
$user1 = new User("Дмитрий", "dddd@mail.ru");
$task1_1 = new Task($user1, "Задача 1", 4);

var_dump($task1_1->getDescription());

// создаем второго пользователя с задачей
$user2 = new User("Кристина", "kkkk@yandex.ru");
$task2_1 = new Task($user2, "Обновить список внутренних телефонов", 2);

// Комментарий пользователя Кристина на задачу Дмитрий
TaskService::addComment($user2, $task1_1, "Необходимо более подробно указать цель задачи");
// Комментарий пользователя Дмитрий
TaskService::addComment($user1, $task1_1, "Спасибо за комментарий, приму во внимание");

// обновляем описание задачи
$task1_1->setDescription("Оплатить аренду");

// Комментарий пользователя Дмитрий на задачу Кристины
TaskService::addComment($user1, $task2_1, "У меня изменился номер, текущий 8765 ");

var_dump($task1_1);
var_dump($task2_1);
