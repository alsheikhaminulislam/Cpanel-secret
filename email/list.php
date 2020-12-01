<?php

require "../init.php";

$result = $cPanel->execute('uapi', 'Email', 'list_pops');
if (!$result->status == 1) {
    echo "Cannot fetch domains list : {$result->messages[0]} | {$result->errors[0]}";

}

for($i=0;$result->data; $i++){
    echo "<br>";
   print_r   ($result->data[$i])  ;
}


?>