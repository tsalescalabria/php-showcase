<?php

include "config/app.php";
include "config/database.php";
include "autoload.php";
include 'router.php';

define('BASE_DIR', __DIR__);

$router = new Router($routes);
$router->handleRequest();





// echo "connected sucessfully";