<?php

require_once 'User.php';
require_once 'Task.php';

$user = new User('n.rozova', 'igorevna.nailya@mail.ru', 'female');
$user->setAge(27);

$task = new Task($user);

$task->setDescription(readline("Какая задача стоит перед вами сегодня?"));
$task->setPriority(readline("Какой приоритет у данной задачи?"));
$task->markAsDone();

var_dump($task);



