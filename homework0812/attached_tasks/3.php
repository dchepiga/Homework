<?php

const SOME = 42;

echo $result = (defined('SOME') ? "Константа " . SOME : 'Константа не определена');

define(SOME, 43);

echo SOME;
//Всё-равно константа равна 42

