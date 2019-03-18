<?php

$css_code = file_get_contents('default.css');

// var_dump($css_code);

// color: #1B6CAB;

preg_match_all('#color:\s*(.*?);#i', $css_code, $matches);

$colors = $matches[1];

$colors = array_map('strtolower', $colors);

$colors = array_unique($colors);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colors in CSS</title>

    <style>
.color {
    display: flex;
}
.color > div {
    width: 1em;
    height: 1em;
    margin-right: 0.5em;
    border: 1px solid #c7c7c7;
}
    </style>
</head>
<body>

    <div class="colors">
        <?php foreach ($colors as $color) : ?>

            <div class="color">

                <div style="background-color: <?= $color ?>"></div>
                <?= $color ?>

            </div>

        <?php endforeach; ?>
    </div>
    
</body>
</html>