<?php


require "../init.php";

$result = $cPanel->execute('uapi', 'DomainInfo', 'list_domains');
if (!$result->status == 1) {
    setE("Cannot fetch domains list : {$result->messages[0]} | {$result->errors[0]}");
    header("location: /index.php");
    die();
}

print_r   ($result->data)  ;
