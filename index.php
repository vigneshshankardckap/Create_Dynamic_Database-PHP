<?php 
require 'router/router.php';
require 'controller/controller.php';

session_start();

$controllers = new controller();
$router = new router();

$router->get('/', 'Home');
$router->post('/createDb', 'createDb');
$router->get('/CreateTable','CreateTable');
$router->get('/insertRecords','insertRecords');
$router->post('/getDatabase','getDatabase');



$router->routing();

