<?php

var_dump(__FILE__);

// __DIR__ = this folder
var_dump(__DIR__);

$file_path = __DIR__.'/filemanager.php';

$pathinfo = pathinfo($file_path);

var_dump($pathinfo);

$extension = pathinfo($file_path, PATHINFO_EXTENSION);

var_dump($extension);

$files = scandir(__DIR__);

var_dump($files);

// open a directory for reading
$dh = opendir(__DIR__);

// read through all of the directory's files one by one
while (false !== ($file = readdir($dh))) {
    var_dump($file);
}

// close the opened directory
closedir($dh);

// create a directory with permissions 0777 and creating 
// the entire path to it if necessary
// mkdir('path/to/the/new/directory', 0777, true);

// rmdir('New directory');

var_dump(is_dir(__DIR__.'/filemanager.php'));

var_dump(is_dir(__DIR__.'/path/to/the'));

var_dump(file_exists('multibyte.php'));

var_dump(file_exists('singlebyte.php'));

// open a file for reading
$fh = fopen('multibyte.php', 'r');

// get the lines of the file one by one
while(false !== ($line = fgets($fh))) {
    var_dump($line);
}

// close the opened file
fclose($fh);

$fh = fopen('new_file.txt', 'w');

fwrite($fh, 'Are you tired yet?'."\nI would say you are.");


fclose($fh);

// read file into array of its lines
$lines = file('multibyte.php');
var_dump($lines);

// get all the contents of a file
$contents = file_get_contents('multibyte.php');
var_dump($contents);

// put all the contents into a file
file_put_contents('another_new_file.txt', 'Contents for the new file');

// delete a file
unlink('another_new_file.txt');