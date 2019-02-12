<?php

// 1.
$name = 'James';

// 2.
$name .= ' Bond';

// 3.
$bond_info = [
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
];

// 4.
echo "The name is {$bond_info['last_name']}. {$bond_info['first_name']} {$bond_info['last_name']}.<br>";

// 5.
echo "One day when I was driving my {$bond_info['car']} in the Alps {$bond_info['enemy']} came along and made me a {$bond_info['relationship_status']}. If only I had my {$bond_info['gun']} with me!<br>";

echo sprintf('One day when I was driving my %s in the Alps %s came along and made me a %s. If only I had my %s with me!<br>', $bond_info['car'], $bond_info['enemy'], $bond_info['relationship_status'], $bond_info['gun']);

// 6.
$bond_info['last_case'] = 'Spectre';

// 12.
require_once 'MoneyPenny/BondCase.php';

use MoneyPenny\BondCase as BondCase;

$case1 = new BondCase(2015);
$case1->setName('Spectre');
$case1->setEnemy('Ernst Stavro Blofeld');

// 13.
$case1->addGirl('Estrella');
$case1->addGirl('Lucia Sciarra');
$case1->addGirl('Madeleine Swann');

var_dump($case1);

// 14.
$case2 = new BondCase(2006);
$case2->setName('Casino Royale');
$case2->setEnemy('Le Chiffre');

// 15.
$case2->addGirl('Vesper Lynd');
$case2->addGirl('Solange Dimitrios');

var_dump($case2);

// 20.
echo 'On average Bond has met ' . BondCase::getAvgGirlsPerCase() . ' girls per case.';