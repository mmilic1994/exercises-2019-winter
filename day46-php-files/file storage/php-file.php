<?php

require_once 'Spyc.php';

$data = Spyc::YAMLLoad('data.yml');

$php_code = var_export($data, true);

var_dump($php_code);

file_put_contents('data.php', '<?php return '.$php_code.';');