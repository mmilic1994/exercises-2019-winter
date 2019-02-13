<?php

// var_dump($_SERVER);

$params = array_filter(explode('/', $_SERVER['REQUEST_URI']));

var_dump($params);

var_dump($_GET);