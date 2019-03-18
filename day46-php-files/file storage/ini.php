<?php

$ini_string = file_get_contents('data.ini');

$data = parse_ini_string($ini_string);

$data = parse_ini_file('data.ini', true);

var_dump($data);