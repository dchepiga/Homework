<?php

# задание 1
$name = "Daria";
$age = 26;

# задание 2
echo "Меня зовут {$name}\n";
echo '<br>';
echo "Мне {$age} лет";

unset($age);
//проверим, что переменная уже не определена
echo "Мне {$age} лет";
