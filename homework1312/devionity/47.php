<?php

for ($c = 1; $c <= 100; $c++) {
    for ($i = 2; $i < $c; $i++) {
        if ($c % $i == 0) continue 2;
    }
    echo "$c ";
}