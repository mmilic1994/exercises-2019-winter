<?php

$root_folder = 'c:\web\bootcamp\exercises';

$files_seen = 0;

function browse_directory($directory)
{
    global $files_seen;

    $dh = opendir($directory);
    while (false !== ($file = readdir($dh))) {

        if($file == '.' || $file == '..') continue;
        if ($file == '.git' || $file == 'node_modules') continue;
        if(is_dir($directory.'/'.$file)) {
            // using recursiveness to go deeper
            browse_directory($directory.'/'.$file);
        } else {
            // do something with the file
            $files_seen++;
        }
    }
    closedir($dh);

    // $files is unset
}

browse_directory($root_folder);

var_dump($files_seen);

var_dump(memory_get_peak_usage());