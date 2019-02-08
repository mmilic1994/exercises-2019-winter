<?php

require_once 'Recipient.php';

$recipient = new Recipient;
$recipient->email = 'bill.gates@apple.com';

echo "The email was sent to {$recipient}";