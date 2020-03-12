<?php
/**
 * Pair programming
 * Team: Ekam, Maureen
 * Description: Default route
 */
//error reporting turned on
ini_set("display_errors",1);
error_reporting(E_ALL);

//require vendor/autoload.php

require_once ("vendor/autoload.php");
require_once ('model/validate.php');
//Start session
session_start();

//instantiate Fat-free
$f3 = Base:: instance();
$controller = new truckcontroller($f3);

//set debug level
$f3->set('DEBUG', 3);

//default route
$f3->route('GET /', function () {
    $GLOBALS['controller']->home();
});

//Define partner's route
$f3->route('GET|POST /partners', function ($f3) {
        $GLOBALS['controller']->partners();
});

// route for summary page
$f3->route('GET|POST /summary', function ($f3) {
    $GLOBALS['controller']->summary();
    session_destroy();
    $_SESSION = array();
});

//run fat free
$f3-> run();

