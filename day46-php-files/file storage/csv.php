<?php

$data = [
    ['Bob', 'Huffy', '1982', 'fighter pilot'],
    ['Anna', 'Smith', '1986', 'waitress']
];

$fh = fopen('data.csv', 'w');

foreach ($data as $row) {
    fputcsv($fh, $row);
}

fclose($fh);