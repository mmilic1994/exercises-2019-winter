<?php

$days_to_christmas = 79;

while ($days_to_christmas > 0) {
    // echo "There are still {$days_to_christmas} days to Christmas<br>";

    $days_to_christmas--;
}

for ($days_to_christmas = 79; $days_to_christmas > 0; $days_to_christmas--) {
    // echo "There are still {$days_to_christmas} days to Christmas<br>";
}


for ($i = 0; $i < 10; $i++) {

    if ($i == 5) {
        continue; // will stop the loop when $number reaches 5
    }

    // echo "This is the {$i}. iteration of the loop<br>";
    
}

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

<?php for ($i = 0; $i < 10; $i++) : ?>
 
    <div>
        This is item <?php echo $i+1; ?> of 10
    </div>
 
<?php endfor; ?>
    
</body>
</html>