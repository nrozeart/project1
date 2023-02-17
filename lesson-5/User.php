<?php

class User {
    private string $username;
    private string $email;
    private ?string $sex;
    private int $age;
    private bool $isActive = true;

    function __construct(string $username, string $email, ?string $sex)
    {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
    }
    function getUserName(): string
    {
        return $this->username ?? 'unknown';
    }
    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }
    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }
};