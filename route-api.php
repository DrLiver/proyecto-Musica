<?php
    require_once "libraries/Router.php";
    require_once "controllers/songController.php";

    $router = new Router();

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    $router->addRoute('songs', 'GET', 'songController', 'getSongs');
    $router->addRoute('songs/:ID', 'GET', 'songController', 'getSongs');
    $router->addRoute('songs/:ID', 'DELETE', 'songController', 'deleteSong');
   

    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
