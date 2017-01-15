<?php

$a = 3;
$b = 0;
$operator = '-';

if ($b == 0 && ($operator == '/' || $operator == '%')) {
    echo 'You can\'t divide by 0!';
} else {
    switch ($operator) {
        case '+':
            echo "{$a} + {$b} = " . ($a + $b);
            break;
        case '-':
            echo "{$a} - {$b} = " . ($a - $b);
            break;
        case '*':
            echo "{$a} * {$b} = " . ($a * $b);
            break;
        case '/':
            echo "{$a} / {$b} = " . ($a / $b);
            break;
        case '%':
            echo "{$a} % {$b} = " . ($a % $b);
            break;
        default:
            echo 'Unknown operator';
            break;
    }
}


