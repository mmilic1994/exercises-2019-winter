<?php

$movie_names = [
    'tt0468569' => 'Dark Knight', 
    'tt0050083' => '12 angry men', 
    'tt0108052' => 'Schindler\'s list',
    'tt0110912' => 'Pulp fiction',
    'tt0167260' => 'Lord of the Rings: Return of the King',
    'tt0111161' => 'The Shawshank redemption',
    'tt0071562' => 'The Godfather II',
    'tt0060196' => 'The good, the bad and the ugly',
    'tt0137523' => 'Fight club',
    'tt0068646' => 'The Godfather',
];
$movie_ratings = [
    'tt0111161' => 9.2,
    'tt0068646' => 9.2,
    'tt0071562' => 9.0,
    'tt0468569' => 8.9, 
    'tt0050083' => 8.9, 
    'tt0108052' => 8.9,
    'tt0110912' => 8.9,
    'tt0167260' => 8.9,
    'tt0060196' => 8.9,
    'tt0137523' => 8.8
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ol>

    <?php foreach ($movie_names as $index => $movie) : ?>

        <li>
            <?= $movie ?> (rating: <?= $movie_ratings[$index] ?>)
        </li>

    <?php endforeach; ?>

</ol>

<?php asort($movie_ratings) ?>

<ol>

    <?php foreach ($movie_ratings as $index => $rating) : ?>

        <li>
            <?= $movie_names[$index] ?> (rating: <?= $rating ?>)
        </li>

    <?php endforeach; ?>

</ol>
    
</body>
</html>