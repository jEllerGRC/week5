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
    $f3 -> route ("GET /", function($f3)
    {
        //add key-value pairs to the F3 "hive"
        $f3 -> set("username", "jshmo");
        $f3 -> set("password", sha1("Password01"));
        $f3 -> set("title", "Working with Templates");

        //save variables
        $f3 -> set("temp", 67);
        $f3 -> set("color", "purple");
        $f3 -> set("food", "pizza");
        $f3 -> set("radius", 10);

        //setting an array variable
        $f3 -> set("fruits", array("apple", "orange", "banana"));

        //setting another array variable
        $f3 -> set("vegetables", array("carrot", "broccoli", "cauliflower"));

//       echo "Week 5";

       //Display a view
        $view = new Template();
        echo $view -> render ("views/info.html");

        //alternative syntax to render the view
        //echo Template::instance() -> render("views/info.html");
    });
?>