<?php
/**
 * Created by PhpStorm.
 * User: toygan
 * Date: 1/12/18
 * Time: 2:11 PM
 */

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default rote
$f3->route('GET /', function (){

    echo '<h1>Routing Demo</h1>';
    //$view = new View;
   // echo $view->render('views/home.html');

});

//page 1 route creation
$f3->route('GET /page1', function (){

    echo '<h1>This is page 1 </h1>';
    //$view = new View;
    // echo $view->render('views/home.html');

});

//page 1 route creation
$f3->route('GET /page2', function (){

    echo '<h1>This is page 2 </h1>';
    //$view = new View;
    // echo $view->render('views/home.html');

});

//a sub directory of the page 1
//page 1 route creation
$f3->route('GET /page1/subpage-a', function (){

    echo '<h1>This is a subpage A, under page 1 </h1>';
    //$view = new View;
    // echo $view->render('views/home.html');

});




//fatfree enable error reporting
$f3->set('DEBUG',3); // highest is 3 lowest 0;

//run fat free
$f3->run();
