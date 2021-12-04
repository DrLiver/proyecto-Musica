<?php
    require_once "libraries/Router.php";

    $router = new Router();

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $router->addRoute('users', 'GET', 'ApiUsersController', 'getUser');
    $router->addRoute('users/:ID', 'DELETE', 'ApiUsersController', 'deleteUser');
   

    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
