<?php

// API server
// mock representation of API functionality

$raw = file_get_contents("php://input");

$data = json_decode($raw, true);


$response = [
    'status' => 'ok',
    'message' => 'Batman arrived in '.$data['vehicles'][0]
];

header('Content-Type: application/json');
echo json_encode($response);