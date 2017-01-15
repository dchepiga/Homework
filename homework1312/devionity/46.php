<?php

$a = 4;
$b = 7;

$r = ($a > $b) ? $a : $b;

switch ($r) {
    case $a:
        echo $a;
        break;
    case $b:
        echo $b;
        break;
    default:
        echo 'something wrong';
        break;

}