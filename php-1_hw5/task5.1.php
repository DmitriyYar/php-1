<?php

include "User.php";
include "Task.php";

// создаем нового пользователя и новую задачу
$user1 = new User("Дмитрий", "dddd@mail.ru");
$task1 = new Task($user1, "Задача 1", 4);

// обновляем описание задачи
$task1->setDescription("Завершить проект магазина");

// отмечаем задачу выполненой
$task1->markAsDone();

var_dump($task1);

