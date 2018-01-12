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


//run fat free
$f3->run();

?>
