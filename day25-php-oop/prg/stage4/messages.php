<?php

$messages = [];

function add_message($type, $text)
{
    global $messages;

    $messages[] = [
        'type' => $type,
        'text' => $text
    ];
}