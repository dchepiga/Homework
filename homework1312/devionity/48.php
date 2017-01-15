<?php

$c = 1;
while ($c <= 100) {
    $i = 2;
    while ($i < $c) {
        if ($c % $i == 0)
        {
            $c++;
            continue 2;
        }
        $i++;
    }
    echo "$c ";
    $c++;
}