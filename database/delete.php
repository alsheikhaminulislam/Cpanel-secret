<?php

require "../init.php";

// On posting the form
$prefix = "demyzoco_";
$database_name  ="database_name";
$parameter = [ 'name' => $prefix.$database_name];
$result = $cPanel->execute('uapi', 'Mysql', 'delete_database', $parameter);
if (!$result->status == 1) {
        echo"Cannot delete database : {$result->errors[0]}" ;
         
}
echo"Database deletion successful." ;