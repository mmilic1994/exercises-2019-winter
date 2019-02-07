<?php

function add_item(&$arr, $it)
{
    $arr[] = $it;
}

$item = 'abc';
$array = [];
 
add_item($array, $item);
var_dump($array); // [0 => 'abc']
 
add_item($array, 'def');
var_dump($array); // [0 => 'abc', 1 => 'def']

function element($element = 'p', $innerhtml = null, $attributes = null)
{
    return "<{$element} {$attributes}>{$innerhtml}</{$element}>";
}

echo element();
echo element('p'); // <p></p>
echo element('p', 'some text'); // <p>some text</p>
echo element('p', 'some text', 'class="foo"'); // <p class="foo">some text</p>
echo element('p', '', 'class="foo"'); // <p class="foo"></p>


function convert_weight($value, $unit = 'kg')
{
    if ($unit == 'lb') {
        return $value * 2.20462262;
    } elseif ($unit == 'kg') {
        return $value / 2.20462262;
    } elseif ($unit == 'stone') {
        return $value * 6.35;
    }
}

echo convert_weight(1, 'lb').'<br>'; // 0.45359237 - converted 1 lb to kilograms
echo convert_weight(1, 'kg').'<br>'; // 2.20462262 - converted 1 kg to lbs
echo convert_weight(1).'<br>';  
echo convert_weight(1, 'stone').'<br>';