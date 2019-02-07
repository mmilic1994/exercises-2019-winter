<?php

var_dump($_GET);

var_dump($_POST);

function post_data($name)
{
    return isset($_POST[$name]) ? htmlspecialchars($_POST[$name]) : '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

    <form action="" method="post">
    
        <input type="text" name="some_name" value="<?= post_data('some_name') ?>">
        <br>

        <textarea name="biography" id="" cols="30" rows="10"><?= post_data('biography') ?></textarea>

        <input type="submit" value="Submit the form!">
    
    </form>

    <?php if (isset($_POST['some_name']) && $_POST['some_name'] == 'open sesame') : ?>

        <h1>Sesame opens</h1>

    <?php endif; ?>
    
</body>
</html>