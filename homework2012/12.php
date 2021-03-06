<?php
/*Напишите функцию, которая возвращает множественное или единственное число существительного.
Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок.
Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа,
для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').*/

function amountAsString($num, $one, $two_four, $five)
{
    if ($num > 0 && is_integer($num)) {
        if ($num == 1) {
            $noun = $one;
        } elseif ($num >= 5) {
            $noun = $five;
        } else {
            $noun = $two_four;
        }
    } else {
        $noun = "is incorrect value";
    }
    return $num . ' ' . $noun;

}

$apples = ['яблоко', 'яблока', 'яблок'];

echo amountAsString(3, ...$apples);
