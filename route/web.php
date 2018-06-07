<?php 

$route->get('/', 'FrontEndController@home');
$route->get('/users', 'FrontEndController@users');

$route->group('/panel', function() use ($route){
    $route->get('/', function(){
        echo 'panel home';
    });
    $route->get('/demo', function(){
        echo 'Panel demo';
    });
})->middleware('/panel*', 'M_Test@rol');

$route->match('GET|POST', '/form', 'FrontEndController@form');