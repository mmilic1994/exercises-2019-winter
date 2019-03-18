<?php

$string = 'příliš žluťoučký kůň úpěl ďábelské ódy';

$length = strlen($string);

var_dump($length);

$length = mb_strlen($string);

var_dump($length);