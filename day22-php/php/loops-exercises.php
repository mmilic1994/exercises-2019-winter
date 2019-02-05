<?php

$time_served = 10;

while ($time_served < 10) {
    $time_served++;

    echo "The prisoner has served {$time_served} years<br>";
}

$time_served = 10;

do {
    $time_served++;

    // echo "The prisoner has served {$time_served} years<br>";
} while ($time_served < 10);

for ($i = 0; $i < 5; $i++) {
    $years_left = 5 - $i;
    // echo "The prisoner has {$years_left} more years to serve<Br>";
}

for ($i = 5; $i > 0; $i--) {
    // echo "The prisoner has {$i} more years to serve<Br>";
}

for ($i = 10; $i > 0; $i--) {
    echo "The prisoner has {$i} more years to serve.<br>";

    if ($i > 5) {
        continue;
    }

    echo 'Going to a parole hearing...<br>';

    if ($i == 2) {
        echo 'Paroled!';
        break;
    }
}