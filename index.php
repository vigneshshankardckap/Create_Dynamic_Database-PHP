<?php 
require 'router/router.php';
require 'controller/controller.php';

session_start();

$controllers = new controller();
$router = new router();

$router->get('/', 'Home');

$router->post('/createDb', 'createDb');

$router->post('/table','table');

$router->post('/inserttable','inserttable');


$router->routing();

