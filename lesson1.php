<?php
    $name = readline("Введите Ваше имя\n");
    $age = readline("Сколько Вам лет?\n");
    echo ("Вас зовут $name, Вам $age лет!\n");

    $task1 = readline("Какая задача стоит перед вами сегодня?\n");
    $timeForTask1 = readline("Сколько примерно времени эта задача займет?\n");
    $task2 = readline("Какая задача стоит перед вами сегодня?\n");
    $timeForTask2 = readline("Сколько примерно времени эта задача займет?\n");
    $task3 = readline("Какая задача стоит перед вами сегодня?\n");
    $timeForTask3 = readline("Сколько примерно времени эта задача займет?\n");

    $totalTime = ($timeForTask1 + $timeForTask2 + $timeForTask3);

    echo ("$name, сегодня у Вас запланировано 3 приоритетных задачи на день:
    -$task1 ($timeForTask1 ч)
    -$task2 ($timeForTask2 ч)
    -$task3 ($timeForTask3 ч)
    Примерное время выполнения плана = $totalTime ч"
    );