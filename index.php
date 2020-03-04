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


//default route
$f3->route('GET /', function ()
{
    $view = new Template();
    echo $view->render('views/home.html');

});

//Define partner's route
$f3->route('GET|POST /partners', function ($f3)
{
    //If form has been submitted, validate
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $company = $_POST['company'];
        $companyPhone = $_POST['phoneNumber'];
        $description = $_POST['description'];

        //Add data to hive
        $f3->set('company', $company);
        $f3->set('phoneNumber', $companyPhone);
        $f3->set('description', $description);

        //If data is valid
        if (validForm()) {

            //Write data to Session
            $_SESSION['company'] = $_POST['company'];
            $_SESSION['phoneNumber'] = $_POST['phoneNumber'];
            $_SESSION['description'] = $_POST['description'];

            //redirect to summary page
            $f3->reroute('/summary');
        }

    }
    $view = new Template();
    echo $view->render('views/partners.html');
});

// route for summary page
$f3->route('GET /summary', function () {

    /*$_SESSION['company'] = $_POST['company'];
    $_SESSION['phonenumber'] = $_POST['phoneNumber'];
    $_SESSION['description'] = $_POST['description'];*/
    $view = new Template();
    echo $view->render('views/summary.html');
});
//run fat free
$f3-> run();

