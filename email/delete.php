<?php

require "../init.php";

$EmailUsername = "lol";
$domain = "demyzo.com";
$addarait = "@";


  $parameters = [
        'email' => $EmailUsername.$addarait.$domain,
        'domain' => $domain,
    ];
    $result = $cPanel->execute('uapi', 'Email', 'delete_pop', $parameters);
    if (!$result->status == 1) {
        echo "Cannot Delete Email account : {$result->messages[0]} | {$result->errors[0]}";
    }
    echo "Email account deletion successful";
 