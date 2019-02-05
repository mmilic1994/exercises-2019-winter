<?php

$logged_in = true;
$username = 'Jan';


$user_is_admin = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul class="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">Eshop</a></li>
    <li><a href="#">Contact</a></li>

    <?php if ($user_is_admin) : ?>

        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>

    <?php endif; ?>

</ul>

<?php

// if ($logged_in == true) {
//     echo '
//     <div class="username">Logged in as '.$username.'</div>
//     <button>Log out</button>';
// } else {
//     echo '<button>Log in</button>';
// }

?>

<?php if ($logged_in == true) : ?>

    <div class="username">Logged in as <?= $username ?></div>
    <button onclick="alert('Logging out');">Log out</button>

<?php else : ?>

    <button>Log in</button>

<?php endif; ?>
    
</body>
</html>