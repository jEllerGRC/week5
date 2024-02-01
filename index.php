<?php

    //This is the controller.

    //Turn on error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once("vendor/autoload.php");

    //Instantiate Fat-Free framework (F3)
    $f3 = Base::instance(); //static method call

    //default route
    $f3 -> route ("GET /", function()
    {
//       echo "Week 5";

       //Display a view
        $view = new Template();
        echo $view -> render ("views/home.html");
    });
?>