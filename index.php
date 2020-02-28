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

//default route
$f3->route('GET /', function ()
{
    $view = new Template();
    echo $view->render('views/home.html');

    //echo "Pet Home";
});

//Define partner's route
$f3->route('GET /partners', function ()
{
    //echo "Hello!";
    $view = new Template();
    echo $view->render('views/partners.html');

    session_destroy();
    $_SESSION = array();
});

//run fat free
$f3-> run();

