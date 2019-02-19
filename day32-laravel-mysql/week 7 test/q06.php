<?php

$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];

// $last_name = array_pop($country_names);
// $last_name = array_pop($country_names);

// foreach ($country_names as $country_code => $name) {
//     echo "The calling code of ". $name ." is ". $calling_codes[$country_code] ."<br>";
// }

// your code begins here
foreach ($calling_codes as $country_code => $calling_code) {
    echo "The calling code of ". $country_names[$country_code] ." is ". $calling_code ."<br>";
}