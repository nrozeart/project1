<?php
$teams = [
    0 => [
        'Иванов Иван',
        'Васильев Василий'
    ],
    1 => [
        'Кириллов Кирилл',
        'Антонов Антон'
    ]
];

foreach ($teams as $teamNumber => $teamMembers) {
    foreach ($teamMembers as $memberIndex => $member) {
        $memberNumber = $memberIndex + 1; // Увеличим индекс на 1, чтобы не вести счет от нуля
        echo "Участник команды $teamNumber: №$memberNumber - $member\n";
    }
}