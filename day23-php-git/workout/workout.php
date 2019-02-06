<?php

// 1.
$movie_name = 'Arrival';

// 2., 7.
$ratings = [
    'user1' => 69,
    'user2' => 95,
    'user3' => 82
];

// 3., 4.
function format_rating($rating) 
{
    return $rating . ' %';
}

// 8., 9.
function get_username($user_id)
{
    $user_names = [
        'user1' => 'Bob',
        'user2' => 'Stuart',
        'user3' => 'Kevin'
    ];

    return $user_names[$user_id];
}

// echo get_username('user1');

// 5., 6., 10.
foreach ($ratings as $user_id => $rating) {
    // echo format_rating($rating);

    echo get_username($user_id) 
        . ' gave '
        . $movie_name
        . ' a rating of '
        . format_rating($rating)
        . '<br>';

    // echo get_username($user_id)." gave {$movie_name} a rating of ".format_rating($rating).'<br>';
    
}