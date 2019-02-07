<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array

var_dump($_POST);

function give_me_post_data($index, $default = '')
{
    if (isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }

    return $data;
}

function print_post_data($index, $default = '')
{
    $raw_data = give_me_post_data($index, $default);

    $encoded_data = htmlspecialchars($raw_data);

    return $encoded_data;
}

// $name = give_me_post_data('name');
// $text = give_me_post_data('text');
// $age = give_me_post_data('age', 18);
// $sex = give_me_post_data('sex', 'f');


// prepare the data to be stored into the "DB"
$data_to_save = [
    'name' => give_me_post_data('name'),
    'text' => give_me_post_data('text')
];

// insert the prepared data into the "DB"
insert($data_to_save);

function print_option($value, $label, $name)
{
    ?>
        <option value="<?= $value ?>" <?= give_me_post_data($name) == $value ? 'selected' : '' ?>><?= $label ?></option>
    <?php
}

function select_field($name, array $values, $selected = null, $html_attributes = '')
{
    $html = '';
    $html .= "<select name=\"{$name}\" {$html_attributes}>";
    foreach ($values as $value => $label) {
        $selected_attr = $value == $selected ? 'selected' : '';
        $html .= "<option value=\"{$value}\" {$selected_attr}>{$label}</option>";
    }
    $html .= '</select>';

    return $html;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms exercise</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

    <!-- create your form here -->
    <form action="" method="post" class="form-style-4">

        <label for="">Name:</label>
        <input type="text" name="name" value="<?= print_post_data('name') ?>">
        <br>
        <br>

        <label for="">Why do you want to adopt a dragon?</label><br>
        <textarea name="text" id="" cols="30" rows="10"><?= print_post_data('text') ?></textarea>
        <br>
        <br>
        <br>

        <?= select_field('color', [
            'white' => 'Whitey',
            'black' => 'Blackie',
            'green' => 'Grinch',
            'blue' => 'Avatar',
            'red' => 'Dragon'
        ], give_me_post_data('color')) ?>
        <br>
        <br>
        <br>

        <?= select_field('gender', [
            'male' => 'Boy',
            'female' => 'Girl'
        ], give_me_post_data('gender')) ?>

        <label for="as_food">Do you want to eat it?</label>
        <input type="checkbox" name="as_food" id="as_food" value="1" <?= give_me_post_data('as_food') == 1 ? 'checked' : '' ?>>

        <label for="cooked">Do you want it pre-cooked?</label>
        <input type="checkbox" name="cooked" id="cooked" value="2" <?= give_me_post_data('cooked') == 2 ? 'checked' : '' ?>>

        <br>
        <br>

        <label for="legs_1">1 leg</label>
        <input type="radio" name="legs" value="1" id="legs_1" <?= give_me_post_data('legs') == 1 ? 'checked' : '' ?>>
        <label for="legs_2">2 legs</label>
        <input type="radio" name="legs" value="2" id="legs_2" <?= give_me_post_data('legs') == 2 ? 'checked' : '' ?>>
        <label for="legs_3">3 legs</label>
        <input type="radio" name="legs" value="3" id="legs_3" <?= give_me_post_data('legs') == 3 ? 'checked' : '' ?>>
        <label for="legs_4">4 legs</label>
        <input type="radio" name="legs" value="4" id="legs_4" <?= give_me_post_data('legs') == 4 ? 'checked' : '' ?>>
        <label for="legs_5">5 legs</label>
        <input type="radio" name="legs" value="5" id="legs_5" <?= give_me_post_data('legs') == 5 ? 'checked' : '' ?>>
        <br>
        <br>

        <input type="submit" value="Click me!">

    </form>
    
</body>
</html>