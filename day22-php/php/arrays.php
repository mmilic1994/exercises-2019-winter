<?php

$array = [
    1, // 0
    2, 
    3
];

var_dump($array);

var_dump($array[0]);

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

$fruit_colors['Plum'] = 'Blue';

$fruit_colors['0'] = 'Pink';

$fruit_colors[] = 'Black';

array_push($fruit_colors, 'Yellow');

var_dump($fruit_colors);

var_dump($fruit_colors['Apple']);

var_dump(array_search('Red', $fruit_colors));

// $fruit_colors = []; // empty array


foreach ($fruit_colors as $fruit_name => $fruit_color) {
    echo 'The color of '.$fruit_name.' is '.$fruit_color.'<br>';
}

$array1 = [
    'a' => 'foo',
    'b' => 'bar',
    0 => 'baz',
    1 => 'qux'
];

$array2 = [
    'a' => 'FOO',
    'c' => 'BAR',
    0 => 'BAZ',
    2 => 'QUX'
];

$merged = array_merge($array1, $array2);

var_dump($merged);