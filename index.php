<?php

header('Content-Type: text/html; charset=utf8');

include_once "class/databaseClass.php";
include_once "controller.php";

$configDB = array(
        'db_host' => "localhost",
        'db_login' => "root",
        'db_password' => "",
        'db_name' => "films"
);

$database = new databaseClass();
$database ->selectDatabase($configDB);


$controller = new controller();


$routeFilms = (empty($_GET['route'])) ? '' : $_GET['route'];

if(!empty($routeFilms)){
    $controller->films($routeFilms);
}else{
    $controller->index();
}


