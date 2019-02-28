<?php

sleep(2);

$response = [
    'status' => 'error',
    'errors' => [
        'The name must be submitted',
        'I am really tired'
    ]
];

echo json_encode($response);