<?php

$a = (boolean)20;

var_dump($a);

/*Только integer 0 будет преобразован в false при приведении типов integer => boolean.
В остальных же случаях будет true */