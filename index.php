<?php

require $_SERVER['DOCUMENT_ROOT']. '/config.php';


use App\src\Rule\Application;

$app = new Application();
$app->router->get('/add-api', 'App\src\controller\ApiController'.'::index');
$app->router->post('/add-api', 'App\src\controller\ApiController'.'::index');
$app->router->get('/', 'App\src\controller\Controller'.'::index');
$app->run();


