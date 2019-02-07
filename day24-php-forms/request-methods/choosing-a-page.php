<?php

if (!empty($_GET['page'])) {
    
}

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

    <h1>Sticky header</h1>

    <nav>
        <a href="?">HOmepage</a>
        <a href="?page=form">Form</a>
    </nav>

    <?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
    
        <?php include('forms.php'); ?>
    
    <?php else : ?>
    
        <?php include('homepage.php'); ?>
    
    <?php endif; ?>
    
</body>
</html>