<?php

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate the F3 Base class
$f3 = Base::instance();

//define a default route
//when user visits the default root(file)
//it runs the function
$f3->route('GET /', function($f3){
    //create variables in the F3 hive, key value pairs
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);

    //define array in fat free hive
    $f3->set('fruits', array('apple', 'orange', 'banana'));
    $f3->set('bookmarks', array('http://www.cnet.com', 'http://www.reddit.com/r/news', 'http://edition.cnn.com/sport'));

    $f3->set('desserts', array(
        'chocolate'=>'Chocolate Mousse',
        'vanilla'=>'Vanilla Custard',
        'strawberry'=>'Strawberry Shortcake'
    ));

    //conditional content
    $f3->set('preferredCustomer', true);
    $f3->set('lastLogin', strtotime('-1 week'));

    //display the template/view
    $view = new Template();
    echo $view->render('views/info.html');
});

//run fat free
$f3->run();
