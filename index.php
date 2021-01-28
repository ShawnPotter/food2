<?php
  //The Controller

  //turn on error reporting
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  //require autoload file
  require_once("vendor/autoload.php");

  //create an instance of the base class
  $f3 = Base::instance();
  $f3->set('DEBUG', 3);

  //Define a default route (home page)
  $f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/home.html');
  });

  //Define a order route
  $f3->route('GET /order', function(){
    $view = new Template();
    echo $view->render('views/form1.html');
  });

  //Define order 2 route
  $f3->route('GET /order2', function(){
    $view = new Template();
    echo $view->render('views/form2.html');
  });

  //Define a summary route
  $f3->route('POST /summary', function(){
    $view = new Template();
    echo $view->render('views/summary.html');
  });

  //run fat free
  $f3->run();
