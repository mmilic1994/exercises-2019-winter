<?php

$data = [
    'config' => [
        'URL' => 'http://mysite.com',
        'host' => 'localhost',
        'port' => 80
    ],
    'environment' => 'development',
    'info' => [
        'contact' => [
            [
                'name' => 'Steve',
                'position' => 'owner'
            ],
            [
                'name' => 'Bob',
                'position' => 'developer'
            ]
        ],
        'address' => 
'Data4You
Krakovská 9,
Praha 1',
        'established' => 2015
    ]    
];

file_put_contents('data.json', json_encode($data));

$data = json_decode(file_get_contents('data.json'), true);

var_dump($data);