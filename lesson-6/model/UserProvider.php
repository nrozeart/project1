<?php

namespace model;
require_once 'User.php'; // Обязательно подключаем наш класс-сущность
class UserProvider
{
    // Тут храним учетные данные
    private array $accounts = [
        'geekbrains' => '123123',
        'root' => '321',
    ];
    // Метод получения пользователя. Если данные не совпали, вернет null
    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $expectedPassword = $this->accounts[$username] ?? null;
        if ($expectedPassword === $password) {
            return new User($username);
        }
        return null;
    }
}