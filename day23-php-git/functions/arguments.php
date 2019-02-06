<?php

$a = 123;
$b = 'abc';

$c = &$a;
$d = &$a;

$a = 234;

unset($d);



/**
 * get the division of 2 numbers
 * AND their modulo
 */
function divmod($a, $b, &$mod = null)
{
    $mod = $a % $b; // 1

    return $a / $b;
}

$result = divmod(10, 3, $remainder);

var_dump($result);
var_dump($remainder);

function headline($text, $importance = 1)
{
    return "<h{$importance}>{$text}</h{$importance}>";
}

echo headline('This is main headline');

echo headline('This is a small headline', 6);