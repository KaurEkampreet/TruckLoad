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

});

//Define partner's route
$f3->route('GET /partners', function ()
{
    $view = new Template();
    echo $view->render('views/partners.html');
});

// route for summary page
$f3->route('POST /summary', function () {
    $_SESSION['company'] = $_POST['company'];
    $_SESSION['phonenumber'] = $_POST['phonenumber'];
    $_SESSION['description'] = $_POST['description'];
    $view = new Template();
    echo $view->render('views/summary.html');
});
//run fat free
$f3-> run();

