<?php

require_once 'Warehouse.php';


$warehouse1 = new Warehouse;
$warehouse1->name = 'Trainyard warehouse';


$warehouse2 = new Warehouse;
$warehouse2->name = 'Docks warehouse';


var_dump($warehouse1);
var_dump($warehouse2);

$warehouse1->addCrate('Old books');
$warehouse1->addCrate('Dusty records');

var_dump($warehouse1);
// 