<?php

require 'lib/DBBlackbox.php';

$movies = select(); // CBP-made function

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

    <ul>
    <?php foreach ($movies as $id => $movie) : ?>

        <li>
            <a href="form.php?id=<?= $id ?>">
                <h3><?= $movie['title'] ?></h3>
                <div class="year"><?= $movie['year'] ?></div>
                <div class="director">Directed by: <?= $movie['director'] ?></div>
            </a>
        </li>

    <?php endforeach; ?>
    </ul>
    
</body>
</html>