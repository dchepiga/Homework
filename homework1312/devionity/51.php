<?php

for ($c = 200; $c <= 400; $c++) {
    for ($i = 2; $i < $c; $i++) {
        if ($c % $i == 0) continue 2;
    }
    echo "$c ";
    break;
}