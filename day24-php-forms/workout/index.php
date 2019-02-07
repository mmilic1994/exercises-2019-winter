<?php
 
require 'fellowship.php';

// 1.
$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring'
];

// 2.
$party['gandalf'] = 'Gandalf the Grey';

// 3.
unset($party['bilbo']);

// 4.
$party['sam'] = 'Samwise Gamgee';

// 5.
unset($party['gandalf']);

// 6.
function leave_hobbiton()
{
    // 7.
    global $party;

    $party = array_merge($party, [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

// 9.
leave_hobbiton();

// 10.
function go_to_bree($party)
{
    // 11.
    $party['strider'] = 'Strider';

    // 12.
    return $party;
}

// 13.
$party = go_to_bree($party);

// 14.
function go_to_weathertop(&$party)
{
    $party = array_merge($party, [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
    ]);
}

// 16.
go_to_weathertop($party);

// 17.
function meet_arwen(&$party)
{
    // 18.
    $party['arwen'] = 'Arwen Undómiel';

    // 19.
    array_splice($party, -10, 9);
}

// 20.
meet_arwen($party);

// 21. 
function go_to_rivendell($party)
{
    // 22.
    unset($party['arwen']);

    // 23.
    $party = array_merge($party, [
        'gandalf' => 'Gandalf the Grey',
        'boromir' => 'Boromir',
        'legolas' => 'Legolas',
        'gimli' => 'Gimli'
    ]);

    // 24.
    $party['strider'] = 'Aragorn';

    return $party;
}

// 25.
$party = go_to_rivendell($party);





present_party($party);

// no more code here