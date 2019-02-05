<?php

$today = 'Monday'; //date('l');

var_dump($today); // Tuesday

function greet($whom)
{
    global $today;

    $today = 'Monday';

    return 'Hello, '.$whom.', such a nice '.$today.' we have!';
}

var_dump($today); // Tuesday

$whom = 'children';

$greeting = greet($whom);

var_dump($today); // Monday

echo $greeting;