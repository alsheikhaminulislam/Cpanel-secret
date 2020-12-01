<?php

require "../init.php";
$parameters = [
            'email' => "lol",
            'password' => "aminulislam1@",
            'domain' => "demyzo.com",
            'quota' => "11",
    ];

    $result = $cPanel->execute('uapi', "Email", "add_pop", $parameters);
    if (!$result->status == 1) {
        echo "Cannot fetch domains list : {$result->messages[0]} | {$result->errors[0]}";
    }

    echo "Email account creation successful";
    