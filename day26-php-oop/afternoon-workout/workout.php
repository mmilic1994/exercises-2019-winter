<?php

require_once 'Auth.php';

// 1.
$user_id = 4;

// 2.
session_start();

// 3.
var_dump($_SESSION);

// 4., 5.
// $_SESSION['user_id'] = $user_id;
// $_SESSION['user_id'] = 2;
// $_SESSION['user_id'] = 3;

// 6.
$username = 'HanSolo';

// 7.
$user = [
    'user_id' => $user_id,
    'username' => $username
];

// 11.
Auth::addUser(['user_id' => 1, 'username' => 'Kevin']);
Auth::addUser(['user_id' => 2, 'username' => 'Stuart']);
Auth::addUser(['user_id' => 3, 'username' => 'Bob']);

// 12.
Auth::addUser($user);
 
var_dump(Auth::getUsers());

// 20.
$current_user = Auth::getCurrentUser();

var_dump($current_user);
