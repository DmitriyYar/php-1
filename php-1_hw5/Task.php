<?php

class Task
{
    private User $user;            // пользователь
    private string $description;   // описание задачи
    private DateTime $dateCreated; // дата создания
    private DateTime $dateUpdated; // дата обновления
    private DateTime $dateDone;    // дата выполнения
    private int $priority;         // приоритет
    private bool $isDone = false;  // состояние выполнения задачи
    private array $comments;       // комментарии

    public function __construct(User $user, string $task, int $priority)
    {
        $this->user = $user;
        $this->description = $task;
        $this->dateCreated = new DateTime();
        $this->priority = $priority;
    }

    public function setDescription(string $_text)
    {
        $this->description = $_text;
        $this->dateUpdated = new DateTime();
    }

    public function markAsDone()
    {
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }


    public function setComments(array $comment): void
    {
        $this->comments[] = $comment;
    }
}
