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

    // if the form was submitted
    if ($_POST) {

        // update $data with whatever was submitted
        $data['title'] = $_POST['title'];
        $data['year'] = $_POST['year'];
        $data['director'] = $_POST['director'];

        // validate the data

        // ok, after the validation, is the $data OK?

            // do something more

    }



    return $data;
}


$data = handle_form();