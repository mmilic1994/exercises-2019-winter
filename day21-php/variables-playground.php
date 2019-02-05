<?php

$first_name = 'Bruce';
$surname = "Wayne";

echo 'First name: ' . $first_name . '<br>
Surname: ' . $surname;

define('CITY', 'Gotham');

$city = CITY;

echo "First name: {$first_name}<br>
Surname: {$surname}<br>
Residence: {$city}";

?>


First name: <?= $first_name ?><br>
Surname: <?= $surname ?>