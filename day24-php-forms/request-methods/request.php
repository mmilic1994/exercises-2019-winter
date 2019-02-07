<?php

var_dump($_GET);
var_dump($_POST);

$data = [
    'page' => 'home',
    'foo' => 'bar'
];
$query_string = http_build_query($data);
var_dump($query_string);

// I am ready to present output
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

    <?php // var_dump($_SERVER); ?>

    <a href="http://www.cbp-exercises.test/day24-php-forms/request-methods/request.php">No data</a>
    <a href="http://www.cbp-exercises.test/day24-php-forms/request-methods/request.php?foo=some%20data">Some data</a>
    <a href="?<?= $query_string ?>">Some more data</a>

    <!-- output the data -->
    <?php echo 'The value of foo is ' . $_GET['foo']; ?>
    
</body>
</html>