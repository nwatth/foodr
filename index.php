<?php

require 'config.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    require 'libs/' . $class .".php";
}


// Load the Bootstrap!
$bootstrap = new Bootstrap();

// Optional Path Settings
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
//$bootstrap->setErrorFile();

$bootstrap->init();