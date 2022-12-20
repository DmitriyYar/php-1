<?php

class TaskService
{
    public static function addComment(User $user, Task $task, $text)
    {
        $comment = new Comment($user, $task, $text);
        $task->setComments((array)$comment);
//        var_dump($comment);
    }
}
