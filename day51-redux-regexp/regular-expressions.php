<?php

$pattern = '#^\s+ab{2}.$#';

$strings = [
    'abc',
    'aabbcc',
    ' abbcc',
    '  abbc',
    ' aBBc'
];

foreach ($strings as $string) {

    $matches = preg_match($pattern, $string);

    var_dump('The string "' .$string. '" '.($matches ? 'matches' : 'does not match').' the pattern');
}

$url = 'mywebsite.com/product/1234-ferrari';
$url_part = '1234-ferrari';

if (preg_match('#^(\d+)\-([a-zA-Z]+)$#imsu', $url_part, $matches)) {

    var_dump($matches);

    var_dump('This string describes a product id and name');

}


$movies = [
    'Dark Knight(2004)',
    'Pulp Fiction (1994)'
];

foreach ($movies as $movie) {

    if (preg_match('#\s*\((\d{4})\)$#', $movie, $matches)) {
        var_dump('Year: ' . $matches[1]);
    }

    var_dump(preg_replace('#\s*\((\d{4})\)$#', '', $movie));
}

// ->where('id', '\d+')