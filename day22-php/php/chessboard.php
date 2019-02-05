<?php

function getColor($i, $j)
{
    if (($i + $j) % 2 == 0) {
        return 'black';
    } else {
        return 'white';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chessboard</title>

    <style>
.board .row {
    width: 24em;
    display: flex;
}
.board .row > div {
    width: 3em;
    height: 3em;
    display: flex;
    align-items: center;
    justify-content: center;
}
.board .white {
    background-color: #c2c2c2;
}
.board .black {
    background-color: #525252;
}
    </style>
</head>
<body>

    <div class="board">

        <?php for ($i = 0; $i < 8; $i++) : ?>

            <div class="row">
            
                <?php for ($j = 0; $j < 8; $j++) : ?>

                    <div class="square <?= getColor($i, $j) ?>">

                        <?php if ($i == 1 && $j == 3) : ?>
                            <img src="http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="">
                        <?php endif;?>

                    </div>

                <?php endfor; ?>
            
            </div>

        <?php endfor; ?>

    </div>
    
</body>
</html>