<?php
/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.*/


$number = 124;
$sum = 0;

if (is_integer($number)) {
    while ($number != 0) {
        $sum += $number % 10;
        $number /= 10;
    }
    echo $sum;

} else {
    echo 'incorrect input';
}


