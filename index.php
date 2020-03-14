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

//set debug level
$f3->set('DEBUG', 3);

//define controller
$controller = new TruckController($f3);

//define database
$db = new TruckLoadDatabase($f3);

//define array for drivers
$f3->set('drivers', array('solo', 'team'));

//define array for trucks
$f3->set("trucks", array('53\'', 'Semi-Truck', 'Straight-Truck', 'Flat-Bed'));

//default route
$f3->route('GET /', function ($f3) {
    $GLOBALS['controller']->home();
});

//define a route that displays partner detail
$f3->route('GET /detail/@partnerId', function ($f3, $params) {
    $GLOBALS['controller']->detail($params['partnerId']);
});

//define a route that displays the admin page
$f3->route('GET /partnerList.html', function ($f3) {
    $GLOBALS['controller']->admin();
});

//Define partner's route
$f3->route('GET|POST /partners', function ($f3) {
        $GLOBALS['controller']->partners();
});

// route for summary page
$f3->route('GET|POST /summary', function ($f3) {


    global $db;
    global $controller;
    $controller->summary($db, $_SESSION['Partner']);
    /*$GLOBALS['controller']->summary();*/

    session_destroy();
    $_SESSION = array();
});

//run fat free
$f3-> run();

