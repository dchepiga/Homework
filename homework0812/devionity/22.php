<?php

define('AT', 'Austria');
define('BY', 'Belarus');
define('GR', 'Greece');

$array = [
    AT => ["capital" => "Vienna"],
    BY => ["capital" => "Minsk"],
    GR => ["capital" => "Athens"],
];

echo '<pre>';
print_r($array);
echo '</pre>';