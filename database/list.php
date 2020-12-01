<?php

require "../init.php";

$result = $cPanel->execute("api2", "MysqlFE", "listdbs");

if (isset($result->cpanelresult->error)) {
    setE("Cannot list database: {$result->cpanelresult->error}");
    header("location: /index.php");
    die();
}
Print_r ($result->cpanelresult->data);