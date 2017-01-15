<?php

$array = [
    1, 2, 3, 4, 5, 6, 7, 8, 9, 10
];

foreach ($array as $value) {
    if (!($value % 3)) echo $value . ' ';
}