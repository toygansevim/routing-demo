<?php
/**
 * Created by PhpStorm.
 * User: toygan
 * Date: 1/12/18
 * Time: 2:11 PM
 */

error_reporting(E_ALL);
ini_set("display_errors",1);

//require the autoload f/*ile
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

//a sub directory of the page
//page 1 route creation
$f3->route('GET /page1/subpage-a', function (){

    echo '<h1>This is a subpage A, under page 1 </h1>';
    //$view = new View;
    // echo $view->render('views/home.html');

});

//define a default rote
$f3->route('GET /jewelery/rings/toe-rings', function (){

    //old version

    //$view = new View;
    // echo $view->render('views/home.html');

    $template = new Template();
    echo $template->render('views/toe-rings.html');

});

//fatfree enable error reporting
$f3->set('DEBUG',3); // highest is 3 lowest 0;

//run fat free
$f3->run();
