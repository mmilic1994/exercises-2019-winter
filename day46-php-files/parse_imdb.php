<?php

$fh = fopen('imdb_movie.csv', 'r');

$line_nr = 0;
while (false !== ($line = fgetcsv($fh, 0, ',', '"'))) {
    
    var_dump($line[3]);

    if ($line_nr++ > 100) {
        break;
    }
}


fclose($fh);