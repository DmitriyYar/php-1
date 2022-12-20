<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(User $user, Task $task, string $text)
    {
        $this->author = $user;
        $this->task = $task;
        $this->text = $text;
    }
}
