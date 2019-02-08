<?php

require_once 'User.php';

$total_users = 0;

/* JS WINDOW:
let steve = new User('steve')
steve.id = 1
steve.name = 'Stephen'
*/

$steve = new User('steve');
$steve->id = 1;
$steve->name = 'Stephen';

/* JS WINDOW:
console.log( `The name of user ${steve.id} is ${steve.name}<br>` )
*/

echo "The name of user {$steve->id} is {$steve->name}<br>";

$bob = new User('bob');
$bob->name = 'Robert';

/* JS WINDOW: 
steve.dumpMe()
bob.dumpMe()
*/

$steve->dumpMe();

$bob->dumpMe();

var_dump($total_users);

$robert = $bob;

var_dump($bob);
var_dump($robert);

unset($steve); 
unset($bob);

var_dump($total_users);
