<?php
// 1. Подготовьте массив целых чисел (4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2).
// Разработайте анонимную функцию для применения в качестве аргумента array_map,
// возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное».
// Для проверки четности числа используйте деление по модулю (%);

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$numbers2 = [45, 52, 100, 44, 7, 8, 415, 6, 721, 88, 5];

$evenOrOdd = function (int $number) {
  if ($number % 2 == 0) {
      return $value = "четное";
  } else {
      return $value = "нечетное";
  };
};

$result = array_map($evenOrOdd, $numbers2);

print_r($result);

// 2. Разработайте функцию с объявленными типами аргументов и возвращаемого значения,
// принимающую в качестве аргумента массив целых чисел. Результатом работы функции должен быть массив,
// содержащий три элемента: max — наибольшее число, min — наименьшее число,
// avg — среднее арифметическое всех чисел массива;

function compareNumbers(array $array) :array {
    $maxNumber = $array[0];
    $minNumber = $array[0];
    $sum= 0;
    $avgNumber = 0;

    foreach($array as $item) {
        if ($item > $maxNumber) {
            $maxNumber = $item;
        };
        if ($item < $minNumber) {
            $minNumber = $item;
        };
        $sum += $item;
        $avgNumber = round($sum/count($array), 2);
    };
    $result = ["max" => $maxNumber,"min" => $minNumber,"avg" => $avgNumber];
    return $result;
};

print_r(compareNumbers($numbers2));