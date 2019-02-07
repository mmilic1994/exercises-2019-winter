<?php

$movies = [
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight', 
    '12 angry men', 
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
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
    
        <?php foreach ($movies as $movie) : ?>
        
            <li><?= $movie ?></li>

        <?php endforeach; ?>

    </ol>

    <?php sort($movies) ?>

    <ol>
    
        <?php for ($i = 0; $i < count($movies); $i++) : ?>
            
            <li><?= $movies[$i] ?></li>

        <?php endfor; ?>

    </ol>
    
</body>
</html>