<?php

require_once 'Spyc.php';

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

$yaml_string = Spyc::YAMLDump($data);

file_put_contents('data.yml', $yaml_string);

$data = Spyc::YAMLLoad('data.yml');

var_dump($data);