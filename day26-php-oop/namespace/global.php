<?php

// no namespace defined

require_once 'namespace.php';

use codingbootcamp\day26\Dog; // ... as Dog
use codingbootcamp\day26\Dog as MyDog;
use function codingbootcamp\day26\create_dog;

codingbootcamp\day26\create_dog();

create_dog();

$ben = new codingbootcamp\day26\Dog;
$ben->bark();

$rex = new MyDog;

var_dump($ben);