<?php

require "../init.php";
$prefix = "demyzoco_";
$database_name  ="database_name";
$parameter = [ 'name' => $prefix.$database_name];
    $result = $cPanel->execute('uapi', 'Mysql', 'create_database', $parameter);
    if (!$result->status == 1) {
        echo"Cannot create database : {$result->errors[0]}";
    }
    echo "Database creation successful.";