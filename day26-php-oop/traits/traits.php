<?php

require_once 'Animal.php';
require_once 'Domesticated.php';
require_once 'Dog.php';
require_once 'Sheep.php';
require_once 'Wolf.php';

$ben = new Dog;

$shaun = new Sheep;

$wolfie = new Wolf;

$ben->beFed();
$shaun->beFed();
// $wolfie->beFed();