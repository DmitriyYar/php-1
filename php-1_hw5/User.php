<?php

class User
{
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setSex(?string $sex): void
    {
        $this->sex = $sex;
    }

    public function setAge(?int $age): void
    {
        $this->age = $age;
    }
}
