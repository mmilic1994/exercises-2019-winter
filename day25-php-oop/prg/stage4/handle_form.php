<?php

require 'lib/DBBlackbox.php';
require 'messages.php';

function handle_form()
{
    add_message('info', 'Beginning handling the form');

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
        $data = find($_GET['id']); // CBP-made function, not part of PHP!

    }
    // now we are sure that we have variable $data which is an array with items
    // 'title', 'year', 'director'

    add_message('warning', 'Going to handle submit');

    // if the form was submitted
    if ($_POST) {
        
        // update $data with whatever was submitted
        $data['title'] = $_POST['title'];
        $data['year'] = $_POST['year'];
        $data['director'] = $_POST['director'];

        $is_valid = true; // presume that the data is valid

        // validate the data
        // in the process of validating the data the value of
        // $is_valid may change to false indicating a big NO NO

        // ok, after the validation, is the $data OK?
        if ($is_valid) {
            
            // is this creating a new record?
            if (empty($_GET['id'])) {
                $id = insert($data); // CBP-made function, not part of PHP!
                // $id is a Database-assigned unique identifier
                // that we can use to retrieve this particular record later
            // if not (this is updating an existing record)
            } else {
                update($_GET['id'], $data); // CBP-made function, not part of PHP!
                $id = $_GET['id'];
            }

            add_message('success', 'Successfully saved!');
            
            // now we are SURE that we have variable $id with the id of
            // the current record

            // redirect to edit
            // header('Location: form.php?id=1234'); // what we will try to do below
            header('Location: '.$_SERVER['SCRIPT_NAME'].'?id='.$id);
            exit();
        }

    }



    return $data;
}


$data = handle_form();