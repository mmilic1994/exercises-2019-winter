<?php

$name = 'Jan';

$name .= ' Polak';
$name = $name . ' Polak';


$number = 0;

var_dump($number++); // prints 0

// now $number is 1

var_dump(++$number); // prints 2

// now $number is 2

// ternary operator

$today = date('l');

$shop_status = ($today == 'Sunday' || $today == 'Saturday') ? 'closed' : ($today == 'Saturday' ? 'closing' : 'open');

var_dump($shop_status);


echo 'The shop is '. ($today == 'Sunday' ? 'closed' : 'open');