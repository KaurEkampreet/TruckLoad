<?php
/**
 * Pair programming
 * Team: Ekam,Laxmi, Maureen
 * Description: Default route
 */
//error reporting turned on
ini_set("display_errors",1);
error_reporting(E_ALL);

//require vendor/autoload.php

require ("vendor/autoload.php");

//instantiate Fat-free

$f3 = Base:: instance();

//default route

$f3->route('GET /', function ()
{
    $view = new Template();
    echo $view->render('views/home.html');

    //echo "Pet Home";
});

//run fat free

$f3-> run();

