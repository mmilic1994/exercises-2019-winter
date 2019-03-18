<?php

    if (isset($_FILES['uploaded_file'])) {
        // move it from temporary folder to uploaded_files

        $tmp_file_location  = $_FILES['uploaded_file']['tmp_name'];
        $original_file_name = $_FILES['uploaded_file']['name'];

        move_uploaded_file($tmp_file_location, 'uploaded_files/'.$original_file_name);
    }

    var_dump($_POST);
    var_dump($_FILES);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File uploading</title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
    
        Upload image (JPG only!!):<br>
        <input type="file" name="uploaded_file[]" multiple>
    
        <input type="submit" value="Upload!">

    </form>
    
</body>
</html>
