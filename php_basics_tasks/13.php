<?php

$s = 160;
$t = 1.5;

//round() используется для округления значения с заданной точностью
echo 'Автомобиль ехал со скоростью ' . round($s / $t, 2) . '(км/ч) или ' . round(($s * 1000) / ($t * 60), 2) . '(м/c)';