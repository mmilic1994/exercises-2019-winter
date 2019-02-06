<?php

function divmod($a, $b, &$mod)
{
    $mod = $a % $b; // 1

    return $a / $b;
}

$remainder = null;

$result = divmod(10, 3, $remainder);

$result = divmod(10, 3, $remainder);


$array = [];

$item = 'Orange';

array_push($array, $item);

var_dump($array);