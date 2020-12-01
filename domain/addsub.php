<?php


require "../init.php";
$domain= "ss";
$rootDomain = "demyzo.com";
$dir = "/public_html/";
$parameters = [
        'domain' => $domain,
        'rootdomain' => $rootDomain,
        'dir' => $dir.$domain,
        'disallowdot' => 1,
    ];
    $result = $cPanel->execute('api2',"SubDomain", "addsubdomain" , $parameters);
    if (isset($result->cpanelresult->error)) {
        echo"Cannot add sub domain : {$result->cpanelresult->error} " ;
 
       
    }
    echo "Sub domain added successfully";
