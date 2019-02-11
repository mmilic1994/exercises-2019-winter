<?php

$movies = [
    [
        'title' => 'Delta Force',
        'rating' => 62,
        'year' => 1986
    ],
    [
        'title' => 'Missing in action',
        'rating' => 57,
        'year' => 1984
    ],
    [
        'title' => 'Firewalker',
        'rating' => 49,
        'year' => 1986
    ],
];

function good_movies($movie)
{
    return $movie['rating'] > 50;
}

class Tools
{
    public static function goodMovies($movie)
    {
        return $movie['rating'] > 50;
    }

}

// $good_movies = array_filter($movies, 'good_movies');

// $good_movies = array_filter($movies, ['Tools', 'goodMovies']);

$min_rating = 60;

$good_movies = array_filter($movies, function($movie) use ($min_rating) {
    return $movie['rating'] > $min_rating;
});

var_dump($good_movies);