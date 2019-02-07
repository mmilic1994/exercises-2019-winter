<?php

function do_something_risky() {
    // pretend to do the risky stuff
   
    // return new messages
    return [
        'error' => [
            'I knew this would happen!',
            'This always happens.'
        ],
        'warning' => [
            'You should fix this before proceeding'
        ],
        'success' => []
    ];
}

$messages = [
    'error' => [
        'Something went wrong',
        'Something went REALLY wrong',
        'There is no end to this!'
    ],
    'warning' => [
        'This is your first warning',
        'This is your final warning'
    ],
    'success' => [
        'Finally, something was successful.'
    ]
];

$new_messages = do_something_risky();

$result_messages = [];
foreach ($messages as $type => $messages_of_type) {
    $messages[$type] = array_merge($messages_of_type, $new_messages[$type]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
.messages {
  margin-bottom: 1em;
}
.messages .message {
  padding: 1em 3em;
  margin: 0.25em 0;
  background-color: ;
  border: 1px solid #b7b7b7;
  position: relative;
  background: #e9e9e9 url('/img/msg-info.png') 1em 1em no-repeat scroll;
  background-size: 1.3em 1.3em;
}
.messages .message.error {
  background-color: #ecbaba;
  border-color: #c84444;
  color: #ba1212;
  background-image: url('/img/msg-error.png');
}
.messages .message.warning {
  background-color: #ece8ba;
  border-color: #c8a444;
  color: #ba8c12;
  background-image: url('/img/msg-warning.png');
}
.messages .message.info {
  background-color: #bae7ec;
  border-color: #44b7c8;
  color: #107394;
  background-image: url('/img/msg-info.png');
}
.messages .message.success {
  background-color: #bbecba;
  border-color: #44c844;
  color: #1f9014;
  background-image: url('/img/msg-success.png');
}
    </style>
</head>
<body>

    <div class="messages">
        <?php foreach ($messages as $type => $messages_of_type) : ?>

            <?php foreach ($messages_of_type as $message) : ?>

                <div class="message <?= $type ?>"><?= $message ?></div>

            <?php endforeach; ?>

        <?php endforeach; ?>
    </div>
    
</body>
</html>