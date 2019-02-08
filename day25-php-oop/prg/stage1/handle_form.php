<?php

require 'lib/DBBlackbox.php';

function handle_form()
{
    // test if this is creating a new movie
    // if it is a new movie
    if (empty($_GET['id'])) {

        // prepare empty data
        // !! make sure that it has the same format as existing data
        $data = [
            'title' => null,
            'year' => null,
            'director' => null
        ];

    // if not
    } else {
        
        // select data from database
        $data = find($_GET['id']);

    }
    // now we are sure that we have variable $data which is an array with items
    // 'title', 'year', 'director'


    return $data;
}


$data = handle_form();