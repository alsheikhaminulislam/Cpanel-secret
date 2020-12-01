<?php

session_start();

require "cPanel/cPanel.php";
require "vendor/autoload.php";

$cPanel = new cPanel("cPanelusername", "password", "Host");