<?php
//Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс
//должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority
//(int), isDone (bool) и обязательное user (User). В качестве класса пользователя воспользуйтесь
//разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия
//со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение
//свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а
//также обновляющий свойства dateUpdated и dateDone.

require_once 'User.php';
require_once 'Comment.php';

class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime(); // Текущие дата и время
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;

    }
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }
    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }
    public function getPriority(): int
    {
        return $this->priority;
    }
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }
    public function getIsDone(): bool
    {
        return $this->isDone;
    }
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }
    public function markAsDone(): void
    {
        $this->dateDone = new DateTime();
        $this->isDone = true;
    }
        public function getUser(): User
    {
        return $this->user;
    }
    public function setUser(User $user): void
    {
        $this->user = $user;
    } //обязательное
    public function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }
}