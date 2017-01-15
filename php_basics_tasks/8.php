<?php

$age = -1;
//$age = '';
//$age = true;
//$age = 1.5;

if (!is_numeric($age) || $age < 0) {
    echo "Неизвестный возраст";
} else {
    if ($age >= 0 && $age <= 17) {
        echo "Вам еще рано работать";
    } elseif ($age >= 18 && $age <= 59) {
        echo "Вам еще работать и работать";
    } else {
        echo "Вам пора на пенсию";

    }
}