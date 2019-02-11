<?php

session_start();

// if there is a flashed value in $_SESSION
if (!empty($_SESSION['success_message'])) {

    // take it from session
    $success_message = $_SESSION['success_message'];

    // delete it from session (== flashing)
    unset($_SESSION['success_message']);
}

$all_ok = true;

if ($_POST && $all_ok) {

    // save the data
    // ...

    // inform the user
    $success_message = 'Text was successfully saved!';

    // flash any messages into the session
    $_SESSION['success_message'] = $success_message;

    // redirect
    header('Refresh: 0');
    exit();
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

    <?php if (!empty($success_message)) : ?>

        <div class="alert alert-success"><?= $success_message ?></div>

    <?php endif; ?>

    <form action="" method="post">
    
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <br>
        <br>
        <input type="submit" value="save">

    </form>
    
</body>
</html>