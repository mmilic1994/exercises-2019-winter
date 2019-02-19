<?php

function paginateCities($page_nr)
{
    $limit = 20;
    $offset = ($page_nr - 1) * $limit;

    $query = "
        SELECT *
        FROM `city`
        WHERE 1
        LIMIT {$offset}, {$limit}
    ";

    return $query;
}

$page_1_query = paginateCities(1);
var_dump($page_1_query);

$page_2_query = paginateCities(2);
var_dump($page_2_query);

$page_10_query = paginateCities(10);
var_dump($page_10_query);