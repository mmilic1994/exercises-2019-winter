<?php

require_once 'Piece.php';
require_once 'Square.php';
require_once 'Board.php';

$black_pawn = new Piece('p');
$white_queen = new Piece('Q');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
body {
    background: yellow;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.board {
    width: 24em;
}
.row {
    height: 3em;
    display: flex;
}
.square {
    width: 3em;
    height: 3em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.dark {
    background-color: #999999;
}
.light {
    background-color: #cfcfcf;
}
    </style>
</head>
<body>

    <?php

// echo $black_pawn;
// echo $white_queen;

// $a2 = new Square(1, 2);
// $b2 = new Square(2, 2, $white_queen);
// $c2 = new Square(3, 2, $black_pawn);
// $d2 = new Square(4, 2);
// echo $a2;
// echo $b2;
// echo $c2;
// echo $d2;

$board = new Board([]);
$board->loadFromFEN('rn1qkb1r/1p3ppp/p2pbn2/4p3/4P3/1NN1BP2/PPP3PP/R2QKB1R b KQkq - 0 8');
echo $board;

?>
    
</body>
</html>
