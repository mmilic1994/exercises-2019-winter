<?php


session_start();

// basic login process:
if ($username == 'Honza' && $password == 'love') {
    $_SESSION['user_id'] = 1;
}
