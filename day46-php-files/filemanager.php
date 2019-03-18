<?php

function file_is_readable($file_abspath) 
{
    $open_basedir = strtolower(ini_get('open_basedir'));
    $file_dir = strtolower(dirname($file_abspath));

    if ($open_basedir && substr($file_dir, 0, strlen($open_basedir)) != $open_basedir) {
        var_dump($open_basedir);
        var_dump($file_dir);
        return false;
    }
    
    return true;
}

$current_dir = isset($_GET['dir']) ? realpath($_GET['dir']) : __DIR__;

$new_dir = null;
if (!empty($_POST['create_dir'])) {
    $new_dir = trim($_POST['dir_name']);

    if ($new_dir && !file_exists($current_dir.'/'.$new_dir)) {
        mkdir($current_dir.'/'.$new_dir, 0777, true);

        header("Refresh:0");
        exit();
    }
}

$files = scandir($current_dir);
sort($files);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        html {
            font-family: Arial;
            font-size: 14px;
        }
        h1 {
            font-size: 1em;
        }
        .manager {
            display: flex;
        }
        .contents {
            display: flex;
            flex-direction: column;
            margin-right: 1em;
        }
        .contents > * {
            border: 1px solid #999999;
            border-radius: 0.25em;
            padding: 0.25em 0.5em;
            margin-bottom: 0.125em;
        }
        .contents .dir {
            order: -1;
        }
        .contents .dir:hover {
            background-color: rgb(222, 222, 242);;
        }
    </style>
</head>
<body>

    <h1><?= $current_dir ?></h1>

    <div class="manager">
        <div class="contents">
            <?php foreach ($files as $file) : ?>
                <?php if ($file == '.') continue; ?>
                <?php if (!file_is_readable($current_dir.$file)) continue; ?>

                <?php if (is_dir(realpath($current_dir.'/'.$file))) : ?>
                    <a class="dir" href="?<?= http_build_query(['dir' => realpath($current_dir.'/'.$file)]) ?>"><?= $file ?></a>
                <?php else : ?>
                    <span class="file"><?= $file ?></span>
                <?php endif; ?>

            <?php endforeach; ?>
        </div>
        <div>
            <div class="new-dir">
                <form action="" method="post">
                    <input type="text" name="dir_name" value="<?= htmlspecialchars($new_dir) ?>">
                    <input type="submit" value="create_dir" name="create_dir">
                </form>

            </div>
        </div>
    </div>
    
</body>
</html>