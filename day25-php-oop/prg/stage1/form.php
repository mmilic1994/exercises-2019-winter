<?php

require 'handle_form.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRG form</title>
</head>
<body>

    <h1>Edit a movie</h1>

    <form action="" method="post">
    
        <label for="">Title:</label><br>
        <input type="text" name="title" value="<?= htmlspecialchars($data['title']) ?>">
        <br><br>

        <label for="">Year:</label><br>
        <input type="text" name="year" value="<?= htmlspecialchars($data['year']) ?>">
        <br><br>

        <label for="">Director:</label><br>
        <input type="text" name="director" value="<?= htmlspecialchars($data['director']) ?>">
        <br><br>

        <input type="submit" value="Save">
    
    </form>

    
</body>
</html>