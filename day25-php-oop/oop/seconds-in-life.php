<?php

$datetime_of_birth = '1982-06-05 12:00:00';

$timestamp_of_birth = strtotime($datetime_of_birth);

$current_timestamp = time();

$age_in_seconds = $current_timestamp - $timestamp_of_birth;

var_dump($age_in_seconds);